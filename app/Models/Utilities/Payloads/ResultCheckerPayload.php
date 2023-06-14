<?php

namespace App\Models\Utilities\Payloads;

class ResultCheckerPayload
{

        public $exam_name; // WAEC OR NECO OR NABTEB
        public $quantity;  // 1,2 0r 5
        
        public function __construct($exam_name, $quantity)
        {
            $this->exam_name = $exam_name;
            $this->quantity = $quantity;
        }
    
}
