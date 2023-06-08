<?php

namespace App\Models\Utilities\Payloads;

class DataPayload
{

    public $network;            //:network_id
    public $mobile_number;      //:09095263835
    public $plan;               //:plan_id
    public $Ported_number;      //:true
    // public $payment_medium;     //:payment_medium

    public function __construct(
        $network,
        $mobile_number,
        $plan,
        $Ported_number = true,
        // $payment_medium = "payment_medium"
    ) {
        $this->network = $network;
        $this->mobile_number = $mobile_number;
        $this->plan = $plan;
        $this->Ported_number = $Ported_number;
        // $this->payment_medium = $payment_medium;
    }
}
