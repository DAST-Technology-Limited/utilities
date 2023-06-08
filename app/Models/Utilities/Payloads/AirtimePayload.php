<?php

namespace App\Models\Utilities\Payloads;


class AirtimePayload
{
        public $network;    //network_id
        public $amount; //amount
        public $mobile_number;  //phone
        public $Ported_number;  //true
        public $airtime_type;   //VTU

        public function __construct($network, $amount, $mobile_number, $Ported_number = true, $airtime_type = "VTU")
        {
            $this->network = $network;
            $this->amount = $amount;
            $this->mobile_number = $mobile_number;
            $this->Ported_number = $Ported_number;
            $this->airtime_type = $airtime_type;
        }
        
        
}
