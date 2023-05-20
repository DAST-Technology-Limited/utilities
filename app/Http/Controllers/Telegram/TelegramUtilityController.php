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

class TelegramUtilityController extends Controller
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
    public function __construct()
    {
        $this->bot_link = env("PAY_TELEGRAM_BOT_LINK");
        $this->bot_url = "https://t.me/chatgpt_dast_bot";
        $this->baseTelegram = new BaseTelegramController($this->bot_link, "pay");
        $this->commands = ["/start"];
        $this->userController = new UserController();
    }

    public function getUpdates(Request $request)
    {

        $this->update = $this->baseTelegram->getUpdate($request);
        $this->user_id = $this->update->message->from->id;
        $this->username = $this->update->message->from->username ?? null;
        if ($this->update->message->text) {
            $this->handleCommand($this->update->message->text);
        }
    }

    public function handleCommand($command)
    {
        $command_array = explode(" ", $command);

        try {
            if (count($command_array)) {
                if ($command_array[0] == "/start") {
                    $this->baseTelegram->sendWelcome($this->user_id);
                } else if ($command_array[0] == "/dastgpt") {
                    $this->baseTelegram->sendBotLink($this->user_id, $this->bot_url, "chat");
                }else {
                    
                    $this->baseTelegram->sendWelcome($this->user_id);
                }
            }
        } catch (\Throwable $th) {
        } finally {
            $user = TGUser::firstOrCreate(["tg_id" => $this->user_id, "tg_username" => $this->username]);
        }
    }


    public function deleteWebHook()
    {
        file_get_contents(env("CHAT_TELEGRAM_BOT_LINK")."deleteWebHook");
        file_get_contents(env("PAY_TELEGRAM_BOT_LINK")."deleteWebHook");
    }

    public function setWebHook()
    {
        file_get_contents(env("CHAT_TELEGRAM_BOT_LINK")."setWebHook?url=https://app.dast.tech/api/get-updates");
        file_get_contents(env("PAY_TELEGRAM_BOT_LINK")."setWebHook?url=https://app.dast.tech/api/pay-updates");
    }
}
