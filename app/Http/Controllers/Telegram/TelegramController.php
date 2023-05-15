<?php

namespace App\Http\Controllers\Telegram;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class TelegramController extends Controller
{

    //keywords
    private $keywords = [
        '/start', 'Balance',  'Withdraw', 'Invite Link', 'My Wallet', 'Set Wallet', '/set_wallet'
    ];


    public function getUpdates(Request $request)
    {
        $update = $request->all();
        dd($update);
        // $update = file_get_contents(env("TELEGRAM_BOT_LINK")."getUpdates", true);
        // $update = json_decode($update, true);

        $update = array_reverse($update);

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

            if (isset($update['message']['text'])) {
                $type = $update['message']['text'];
            } else if (isset($update['message']['left_chat_participant'])) {
                $type = 'left_chat_member';

                // if ($chat_id == env('DIGITMONI_GROUP')) {
                //     User::where('tgid', $sender_id)
                //         ->update([
                //             'digitmoni_group' => '0'
                //         ]);
                // }

                // if ($chat_id == env('CRYPTO_HUB')) {
                //     User::where('tgid', $sender_id)
                //         ->update([
                //             'signal_group' => '0'
                //         ]);
                // }

                // if ($chat_id == env('SIGNAL_GROUP')) {
                //     User::where('tgid', $sender_id)
                //         ->update([
                //             'crypto_hub' => '0'
                //         ]);
                // }
            } else if (isset($update['message']['new_chat_participant'])) {
                $type = 'new_chat_member';

                // if ($chat_id == env('DIGITMONI_GROUP')) {
                //     User::where('tgid', $sender_id)
                //         ->update([
                //             'digitmoni_group' => '1'
                //         ]);
                // }

                // if ($chat_id == env('CRYPTO_HUB')) {
                //     User::where('tgid', $sender_id)
                //         ->update([
                //             'signal_group' => '1'
                //         ]);
                // }

                // if ($chat_id == env('SIGNAL_GROUP')) {
                //     User::where('tgid', $sender_id)
                //         ->update([
                //             'crypto_hub' => '1'
                //         ]);
                // }

                return $update;
            }

            //Handling private messages
            if ($chat_type !== "" && $chat_type == 'private') {

                // handling /start
                if (strpos($type, '/start') !== false || true) {
                    $referrer = explode(" ", $type);
                    // count($referrer) > 1 ? $referrer = $referrer[1] : $referrer = "1609019384";


                    // $user = User::where('tgid', $sender_id)->get();

                    // if (count($user) == 0) {

                    //     $is_new_user = true;

                    //     User::create(
                    //         [
                    //             'name' => $sender_name,
                    //             'tgid' => $sender_id,
                    //             'email' => $sender_name . $sender_id . "@gmail.com",
                    //             'referred_by' => $referrer,
                    //             'password' => Hash::make($sender_id)
                    //         ]
                    //     );

                    //     $user = User::where('tgid', $sender_id)->get();
                    // }

                    $this->sendMessage($sender_id, "Welcome");
                }

                //start ends here

                // handling withdrawal
                else if (strpos($type, 'Withdraw') !== false) {

                    $user = User::where('tgid', $sender_id)->get();

                    if (count($user) !== 0) {

                        $fund_password = rand(100000, 999999);
                        User::where('tgid', $sender_id)
                            ->update([
                                'fund_password' => $fund_password
                            ]);

                        $balance = $user[0]['balance'] == null ? "0.0" : $user[0]['balance'];
                        $text = "Follow this link to make withdrawal👇 \n" . URL::to("/withdraw/" . $sender_id) . "/" . $fund_password;
                        $this->sendMessage($sender_id, $text);
                    }
                }


                // handling subscription
                else if (strpos($type, 'Subscribe') !== false) {

                    $user = User::where('tgid', $sender_id)->get();

                    if (count($user) !== 0) {
                        $text = "SUBSCRIPTION LINKS: \n\nCrypto Payment👇\n" . URL::to("/fund/" . $sender_id) . 
                        " \n\nATM Card, USSD & Transfer Payment👇\nhttps://digitmoni.com/signal_sub/" . $sender_id . 
                        "\n\nNote: Crypto payment is made in dapp browser. You only get referal bonus if you pay with crypto option.";
                        $this->sendMessage($sender_id, $text);
                    }
                }


                // handling balance
                else if (strpos($type, 'Balance') !== false) {

                    $user = User::where('tgid', $sender_id)->get();

                    if (count($user) !== 0) {

                        $balance = $user[0]['balance'] == null ? "0.0" : $user[0]['balance'];

                        $text = "Your balance is $$balance";
                        $this->sendMessage($sender_id, $text);
                    }
                }

                // handling Invite
                else  if (strpos($type, 'Invite Link') !== false) {

                    $text = "Your referal link is👇 \n" . env('PROMO_BOT_LINK') . $sender_id . "\n\n Keep sharing it to earn more reward";
                    $this->sendMessage($sender_id, $text);
                }

                 // Signal Link
                 else  if (strpos($type, '/signal') !== false) {

                   $this->getSignalLink($sender_id);
                }


                // handling Expiry
                else if (strpos($type, 'Expiry') !== false) {
                //     $UserActivate = new UserActivate();
                //     $user = $UserActivate->checkmember($sender_id);

                //     if ($user['status']) {
                //         $date = $user["data"][2];
                //         $date = Carbon::createFromTimeStamp($date)->diffForHumans();
                //         $text = "Your subscription expiry date:  " . $date;
                //         $this->sendMessage($sender_id, $text);
                //     } else {
                //         return;
                //     }
                } else {
                    $text = "Command not found, please direct all your complains to @masterclems or /start";
                    $this->sendMessage($sender_id, $text);
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