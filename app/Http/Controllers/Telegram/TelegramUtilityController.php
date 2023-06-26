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
    public $user;
    
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
        $this->username = $this->update->message->from->username ?? "";
        $this->user = TGUser::updateOrCreate(["tg_id" => $this->user_id],["link_code" => Str::uuid(), "tg_username" => $this->username ?? ""]);
        if ($this->update->message->text && $this->user->user_id) {
            $this->handleCommand($this->update->message->text);
        }
        else 
        {
            $this->baseTelegram->sendRequestAuth($this->user->tg_id, $this->user->link_code);
        }
    }

    public function handleCommand($command)
    {
        $command_array = explode(" ", $command);

        try {
            if (count($command_array)) {
                switch($command_array[0])
                {
                    case "/start":
                        $this->baseTelegram->sendWelcome($this->user_id);
                        break;

                    case "/dastgpt":
                        $this->baseTelegram->sendBotLink($this->user_id, $this->bot_url, "chat");
                        break;

                         $this->baseTelegram->sendWelcome($this->user_id);
                    case "Airtime":
                        $data = array("message" => "You can purchase Airtime from our website", "buttons" => [["Buy Airtime", URL("/dashboard/airtime")]]);
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "Data":
                        $data = array("message" => "You can purchase Data plan from our website", "buttons" => [["Buy Data Plan", URL("/dashboard/data")]]);
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "Electricity":
                        $data = array("message" => "You can pay for electricity bills from our website", "buttons" => [["Pay for electricity bills", URL("/dashboard/electricity")]]);
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "WAEC":
                        $data = array("message" => "You can buy WAEC result checker pin from our website", "buttons" => [["Purchase WAEC pins", URL("/dashboard/waec")]]);
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "NECO":
                        $data = array("message" => "You can buy NECO result checker pin from our website", "buttons" => [["Purchase NECO pins", URL("/dashboard/neco")]]);
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;

                    case "DSTV":
                    case "STARTIMES":
                    case "GOTV":
                        $data = array("message" => "You can subscribe for DSTV, GOVT and STARTIMES from our website", "buttons" => [["Subscribe your cable", URL("/dashboard/cable")]]);
                        $this->baseTelegram->sendBtnMessage($this->user_id, $data);
                        break;
                    default:
                        $this->baseTelegram->sendWelcome($this->user_id);
                }
                // if ($command_array[0] == "/start") {
                //     $this->baseTelegram->sendWelcome($this->user_id);
                // } else if ($command_array[0] == "/dastgpt") {
                //     $this->baseTelegram->sendBotLink($this->user_id, $this->bot_url, "chat");
                // }else {
                //     $this->baseTelegram->sendWelcome($this->user_id);
                // }
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
        file_get_contents(env("CHAT_TELEGRAM_BOT_LINK")."setWebHook?url=https://dast.tech/api/get-updates");
        file_get_contents(env("PAY_TELEGRAM_BOT_LINK")."setWebHook?url=https://dast.tech/api/pay-updates");
    }
}
