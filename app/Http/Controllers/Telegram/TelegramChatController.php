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

class TelegramChatController extends Controller
{
    public $client;
    public $baseTelegram;
    public $bot_link;
    public $update;
    public function __construct()
    {
        $this->bot_link = env("CHAT_TELEGRAM_BOT_LINK");
        $this->client = new OpenAi(env("OPENAI_API_KEY"));
        $this->baseTelegram = new BaseTelegramController($this->bot_link);
    }

    public function getUpdates(Request $request)
    {

        $this->update = $this->baseTelegram->getUpdate($request);
        if ($this->update) {
            //Handling private messages
            // $response = self::askChatGPT("How far");
            // $this->baseTelegram->sendMessage($this->update->message->from->id, $response->choices[0]->message->content);
        }
    }

    public function askChatGPT($text, $max_token = 100)
    {
        $this->baseTelegram->sendMessage($this->update->message->from->id, "Processing...");
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

        return  json_decode($chat);
    }
}
