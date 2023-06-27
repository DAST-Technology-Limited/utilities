<?php

namespace App\Models\Utilities\Payloads;

use App\Models\Utilities\Payloads\DataPayload;

class AirtimePayload extends DataPayload
{
    public $amt; // $amount
    public function __construct($phone, $network, $amt)
    {
        parent::__construct($phone, $network);
        $this->amt = $amt;
    }
}
