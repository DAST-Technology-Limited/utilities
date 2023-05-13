<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public $url = "https://api.telegram.org/";
    public function getUpdates(Request $request)
    {
        // $update = file_get_contents($this->url . env("TELEGRAM_CHATGPT_API_KEY") . "/getMe");
        $myfile = fopen("updates.txt", "w") or die("Unable to open file!");
        fwrite($myfile, json_decode($request));
        fclose($myfile);
        // {"ok":true,"result":{"id":5934859929,"is_bot":true,
        //     "first_name":"CHATGPT & DAST","username":"chatgpt_dast_bot",
        //     "can_join_groups":true,"can_read_all_group_messages":false,
        //     "supports_inline_queries":false}
        // }
        // $update = json_encode($update->)
        // $update = file_get_contents($this->url.env("TELEGRAM_CHATGPT_API_KEY")."/sendMessage?chat_id=".."&text="."Coming soon");
        // dd($update->result);
    }
}
