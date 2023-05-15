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
        $update = $request->all();
        $update = array_reverse($update);
        $content = json_encode($update);
        file_put_contents("update.txt", $content);
return;
        if (count($update) > 0) {
            // Extract important infomation
            $sender_id = $update['message']['from']['id'];
            $sender_name = $update['message']['from']['first_name'];
            $chat_id = "";
            $chat_type = '';
            $date = "";
            $type = "";
            $referrer = '';
            $is_new_user = false;
            $group_id = '';

            if (isset($update['message']['chat'])) {
                $chat_id = $update['message']['chat']['id'];
                $chat_type = $update['message']['chat']['type'];
            }

            //Handling private messages
            if ($chat_type !== "" && $chat_type == 'private') {
                $chat = $this->client->chat([
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        [
                            "role" => "user",
                            "content" => $update['message']['chat']['text']
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

        // if($signal_group!='1'){array_push($inline_buttons,array(array(
        //     "text" => "🎉Join Signal Group🎉",
        //     "url" => "https://t.me/digitmoni_signal"
        // )));} 

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


    private function sendMessage($sender_id, $text)
    {

        $msg1 = array(
            "chat_id" => $sender_id,
            "text" => $text,
            "parse_mode" => "html"
        );

        $ch = curl_init();

        $options = array(
            CURLOPT_URL => env("TELEGRAM_BOT_LINK") . "sendMessage",
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $msg1,
            CURLOPT_RETURNTRANSFER => 1
        );

        curl_setopt_array($ch, $options);
        $update = curl_exec($ch);

        curl_close($ch);
    }


    public function getSignalLink($tgid)
    {
        //     $UserActivate = new UserActivate();
        //     $user = $UserActivate->checkmember($tgid);

        //     if ($user['status']) {
        //         $date = $user["data"][2];
        //         $date = Carbon::createFromTimeStamp($date)->diffForHumans();
        //         $text = "";
        //         if (strpos($date, 'ago') !== false){
        //             $text = "Your subscription status is inactive. To join the signal group kindly subscribe";
        //         }else{
        //             $text = "Your subscription status is active. Join the signal group from the link  below👇\n\n https://t.me/digitmoni_signal";
        //         }

        //         $this->sendMessage($tgid, $text);
        //     }
    }
}
