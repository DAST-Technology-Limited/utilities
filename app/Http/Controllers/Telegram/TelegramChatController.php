<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Orhanerday\OpenAi\OpenAi;
use App\Http\Controllers\Telegram\BaseTelegramController;
use App\Http\Controllers\User\UserController;
use App\Models\TGUser;
use Illuminate\Support\Str;

class TelegramChatController extends Controller
{
    public $client;
    public $baseTelegram;
    public $userController;
    public $bot_link;
    public $bot_url;
    public $update;
    public $commands;
    public $user_id;
    public $username;
    public $sub_details;
    public $user;
    public function __construct()
    {
        $this->bot_link = env("CHAT_TELEGRAM_BOT_LINK");
        $this->bot_url = "https://t.me/dast_pay_bot";
        $this->client = new OpenAi(env("OPENAI_API_KEY"));
        $this->baseTelegram = new BaseTelegramController($this->bot_link, "chat");
        $this->commands = ["/start"];
        $this->userController = new UserController();
    }

    public function getUpdates(Request $request)
    {

        $this->update = $this->baseTelegram->getUpdate($request);
        $this->user_id = $this->update->message->from->id;
        $this->sub_details = $this->userController->verifySub($this->user_id);
        $this->username = $this->update->message->from->username ?? "";
        $this->user = TGUser::updateOrCreate(["tg_id" => $this->user_id],["link_code" => Str::uuid(), "tg_username" => $this->username ?? ""]);
        if (($this->update->message->text && $this->user->user_id) || $this->sub_details < 10) {
            $this->handleCommand($this->update->message->text);
        }
        else 
        {
            $this->baseTelegram->sendRequestAuth($this->user->tg_id, $this->user->link_code);
        }
    }

    public function handleChat($text, $max_token = 1000)
    {


         $response = json_decode($this->baseTelegram->sendMessage($this->user_id, "Processing..."));
         
        $chat = $this->client->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    "role" => "user",
                    "content" => $text
                ],
            ],
            'temperature' => 1.0,
            'max_tokens' => $max_token,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ]);
        $this->baseTelegram->deleteMessage($response->result->chat->id, $response->result->message_id);
        return  json_decode($chat)->choices[0]->message->content;
    }

    public function handleCommand($command)
    {
        $command_array = explode(" ", $command);
        $createQuestion = false;
        $response = "";

        try {
            if (count($command_array)) {
                if ($command_array[0] == "/start") {
                    $this->baseTelegram->sendWelcome($this->user_id);
                } else if ($command_array[0] == "/dastpay") {
                    $this->baseTelegram->sendBotLink($this->user_id, $this->bot_url, "pay");
                } else {
                    if ($this->sub_details["active_sub"] || $this->sub_details["totalrequests"] < 10) {
                        $createQuestion = true;
                        $response = $this->handleChat($command);
                        $this->baseTelegram->sendMessage($this->user_id, $response);
                    } else {
                        $this->baseTelegram->sendMessage($this->user_id, "Sorry your have exhausted your free text for today. To enjoy unlimited usage please subscribe");
                    }
                }
            }
        } catch (\Throwable $th) {
        } finally {
            if ($createQuestion) {
                $this->user->chats()->create(["t_g_user_id" => $this->user_id, "questions" => $command, "response" => $response]);
            }
        }
    }
}
