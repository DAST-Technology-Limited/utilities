<?php

namespace App\Models\Utilities\Payloads;

class StarTimesPayload
{
    public $amt; // amount to recharge
    public $phone; // phone number for notification
    public $smartno; // smart card number
    public $vcode; // product code obtained from the get packages API
    public $user_ref; // user defined reference

    public function __construct(
        $amt,
        $phone,
        $smartno,
        $vcode,
        $user_ref
    ) {
        $this->amt = $amt;
        $this->phone =  $phone;
        $this->smartno =    $smartno;
        $this->vcode =  $vcode;
        $this->user_ref =   $user_ref;
    }
}
