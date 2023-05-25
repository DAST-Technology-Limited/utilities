<?php

namespace App\Classes;

class BotTypes
{
    private $bot_chat;
    private $bot_pay;
    private $currencies;

    public function __construct()
    {
        $this->bot_chat = "chat";
        $this->bot_pay = "pay";
        $this->currencies = ["ngn", 'usd'];
    }

    public function getBotChat()
    {
        return $this->bot_chat;
    }

    public function getBotPay()
    {
        return $this->bot_pay;
    }

    public function getCurrencies()
    {
        return $this->currencies;
    }
}
