<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Orhanerday\OpenAi\OpenAi;

class TelegramController extends Controller
{
    public $client;
    public function __construct()
    {
        $this->client = new OpenAi(env("OPENAI_API_KEY"));
    }

    public function getUpdates(Request $request)
    {
        if (env("MODE") == "live") {
            $update = json_decode(json_encode($request->all()));
        } else {
            $update = file_get_contents(env("TELEGRAM_BOT_LINK") . "getUpdates", true);
            $update = json_decode($update);
            $count = count($update->result);
            if ($count == 0) {
                return;
            }
            $update = $update->result[$count - 1];
        }
        // return;
        if ($update) {
            // Extract important infomation
            $sender_id = $update->message->from->id;
            $sender_name = $update->message->from->first_name;
            $chat_id = "";
            $chat_type = '';
            $date = "";
            $type = "";
            $referrer = '';
            $is_new_user = false;
            $group_id = '';

            if (isset($update->message->chat)) {
                $chat_id = $update->message->chat->id;
                $chat_type = $update->message->chat->type;
            }

            //Handling private messages
            if ($chat_type !== "" && $chat_type == 'private') {
                $this->sendMessage($sender_id, "Processing...");
                $chat = $this->client->chat([
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        [
                            "role" => "user",
                            "content" => $update->message->text
                        ],
                    ],
                    'temperature' => 1.0,
                    'max_tokens' => 4000,
                    'frequency_penalty' => 0,
                    'presence_penalty' => 0,
                ]);

                $d = json_decode($chat);

                // handling /start
                if (strpos($type, '/start') !== false || true) {
                    $referrer = explode(" ", $type);
                    $this->sendMessage($sender_id, $d->choices[0]->message->content);
                }
            }
            return;
        } else {

            return;
        }
    }


    private function sendWelcome($user)
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
