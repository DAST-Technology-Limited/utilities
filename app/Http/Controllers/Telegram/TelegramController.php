<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public $url = "https://api.telegram.org/";
    public function getUpdates(Request $request)
    {
        $update = file_get_contents($this->url.env("TELEGRAM_CHATGPT_API_KEY")."/getUpdates");
        file_put_contents("update.txt", $update);
        // $update = json_encode($update->)
        // $update = file_get_contents($this->url.env("TELEGRAM_CHATGPT_API_KEY")."/sendMessage?chat_id=".."&text="."Coming soon");
        // dd($update->result);
    }
}
