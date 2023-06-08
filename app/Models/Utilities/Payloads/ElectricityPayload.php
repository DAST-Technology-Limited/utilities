<?php

namespace App\Models\Utilities\Payloads;

class ElectricityPayload
{
   
        public $disco_name; //disco,
        public $amount; //amount to pay,
        public $meter_number; // meter number,
        public $MeterType; // meter type id (PREPAID:1,POSTPAID:2)

        public function __construct($disco_name, $amount, $meter_number, $MeterType)
        {
            $this->disco_name = $disco_name;
            $this->amount = $amount;
            $this->meter_number = $meter_number;
            $this->MeterType = $MeterType;
        }
        
        
}
