<?php

namespace App\Models\Utilities\Payloads;

class CablePayload
{
    
        public $cablename; // cablename id, 
        public $cableplan;     // cableplan id,
        public $smart_card_number;     // smart_card_number

        public function __construct($cablename, $cableplan, $smart_card_number)
        {
            $this->cablename = $cablename;
            $this->cableplan = $cableplan;
            $this->smart_card_number = $smart_card_number;
        }
    
}
