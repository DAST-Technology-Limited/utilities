<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseTelegramController extends Controller
{
    public $bot_link;

    public function __construct($bot_link)
    {
        $this->bot_link = $bot_link;
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

    public function sendWelcome($user)
    {
        $button = array(array("🤑 Withdraw", "💰 Balance", "🔗Invite Link"), array("💴 Subscribe", "⏰ Expiry"));
        $button = array("keyboard" => $button, "resize_keyboard" => true, "one_time_keyboard" => false);
        $encodedButton = json_encode($button);
        $inline_buttons = array();

        $digitmoni_group = $user[0]['digitmoni_group'];
        $signal_group = $user[0]['signal_group'];
        $crypto_hub = $user[0]['crypto_hub'];

        if ($digitmoni_group != '1') {
            array_push($inline_buttons, array(array(
                "text" => "🎉Join Digitmoni Group🎉",
                "url" => "https://t.me/Digit_moni"
            )));
        }

        if ($crypto_hub != '1') {
            array_push($inline_buttons, array(array(
                "text" => "🎉Join Crypto Hub🎉",
                "url" => "https://t.me/digitcryptohub"
            )));
        }

        $replyMarkup = array("inline_keyboard" => $inline_buttons);
        $encodedMarkup = json_encode($replyMarkup);

        $msg1 = array(
            "chat_id" => $user[0]['tgid'],
            "text" => "Welcome to Digitmoni\n",
            "parse_mode" => "html",
            "reply_markup" => $encodedMarkup
        );

        // remove inline buttons if user have joined all groups
        if (count($inline_buttons) < 1) {
            unset($msg1['reply_markup']);
        }

        $msg2 = array(
            "chat_id" => $user[0]['tgid'],
            "text" => "...",
            "parse_mode" => "html",
            "reply_markup" => $encodedButton
        );
        $ch = curl_init();

        $options = array(
            CURLOPT_URL => env("TELEGRAM_BOT_LINK") . "sendMessage",
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $msg1,
            CURLOPT_RETURNTRANSFER => 1
        );

        $options2 = array(
            CURLOPT_URL => env("TELEGRAM_BOT_LINK") . "sendMessage",
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $msg2,
            CURLOPT_RETURNTRANSFER => 1
        );

        curl_setopt_array($ch, $options);
        $update = curl_exec($ch);


        curl_setopt_array($ch, $options2);
        curl_exec($ch);

        curl_close($ch);
    }
}
