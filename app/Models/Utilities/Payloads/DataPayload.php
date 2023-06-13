<?php

namespace App\Models\Utilities\Payloads;

use Illuminate\Support\Str;

class DataPayload
{
   
    public $network; // network Id which is 1 for MTN
    public $phone; // receiver's number
    public $user_ref; // user defined reference (optional)

    public function __construct(
        $phone,
        $network = "1"
    )
    {
        $this->network = $network;
        $this->phone = $phone;
        $this->user_ref = Str::uuid();
    }
}
