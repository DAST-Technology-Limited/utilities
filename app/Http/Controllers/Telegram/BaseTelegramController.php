<?php

namespace App\Http\Controllers\Telegram;

use App\Classes\BotTypes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseTelegramController extends Controller
{
    public $bot_link;
    public $bot_type;
    public function __construct($bot_link, $bot_type)
    {
        $this->bot_link = $bot_link;
        $this->bot_type = $bot_type;
    }

    public function getUpdate(Request $request)
    {
        if (env("MODE") == "live") {
            $update = json_decode(json_encode($request->all()));
        } else {
            $update = file_get_contents($this->bot_link . "getUpdates", true);
            $update = json_decode($update);
            $count = count($update->result);
            if ($count == 0) {
                return;
            }
            $update = $update->result[$count - 1];
        }
        return $update;
    }

    public function sendMessage($sender_id, $text)
    {
        $msg1 = array(
            "chat_id" => $sender_id,
            "text" => $text,
            "parse_mode" => "html"
        );
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $this->bot_link . "sendMessage",
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $msg1,
            CURLOPT_RETURNTRANSFER => 1
        );

        curl_setopt_array($ch, $options);
        $update = curl_exec($ch);

        curl_close($ch);
    }

    public function deleteMessage($chat_id, $message_id)
    {
        $msg1 = array(
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "parse_mode" => "html"
        );
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $this->bot_link . "deleteMessage",
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $msg1,
            CURLOPT_RETURNTRANSFER => 1
        );

        curl_setopt_array($ch, $options);
        $update = curl_exec($ch);

        curl_close($ch);
    }

    public function sendWelcome($user_id)
    {
        $bot_types = new BotTypes();
        if ($this->bot_type == $bot_types->getBotChat()) {
            $msg1 = array(
                "chat_id" => $user_id,
                "text" => "Welcome to DAST GPT BOT\n How may I help you?",
                "parse_mode" => "html"
            );

            $ch = curl_init();
            $options = array(
                CURLOPT_URL => $this->bot_link . "sendMessage",
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $msg1,
                CURLOPT_RETURNTRANSFER => 1
            );

            curl_setopt_array($ch, $options);
            $update = curl_exec($ch);
            curl_close($ch);
        }
        else if ($this->bot_type == $bot_types->getBotPay()) {

            $keyboard = array(
                array("Airtime"),
                array("Data"),
                array("Electricity"),
                array("WAEC"),
            );
            $ReplyKeyboardMarkup = array(
                "keyboard" => $keyboard, 
                "is_persistent" => true, 
                "one_time_keyboard" => true);

            $msg1 = array(
                "chat_id" => $user_id,
                "text" => "Welcome to DASTPAY BOT! \nHow may I help you?",
                "reply_markup" => json_encode($ReplyKeyboardMarkup),
                "parse_mode" => "html"
            );

            $ch = curl_init();
            $options = array(
                CURLOPT_URL => $this->bot_link . "sendMessage",
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $msg1,
                CURLOPT_RETURNTRANSFER => 1
            );

            curl_setopt_array($ch, $options);
            $update = curl_exec($ch);
            curl_close($ch);
        }
    }
}
