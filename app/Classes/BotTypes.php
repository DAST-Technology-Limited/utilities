<?php

namespace App\Classes;

class BotTypes
{
    private $bot_chat;
    private $bot_pay;

    public function __construct()
    {
        $this->bot_chat = "chat";
        $this->bot_pay = "pay";
    }

    public function getBotChat()
    {
        return $this->bot_chat;
    }

    public function getBotPay()
    {
        return $this->bot_pay;
    }
}
