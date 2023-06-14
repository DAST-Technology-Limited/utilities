<?php

namespace App\Models\Utilities\Payloads;

class ElectricityPayload
{
        public $service; //- the product_id of the Electricity company/DISCO
        public $mtype; //- meter type, 1 for prepaid, 0 for postpaid.
        public $meterno; //meter no
       
        public function __construct($service, $mtype, $meterno)
        {
            $this->service = $service;
            $this->mtype = $mtype;
            $this->meterno = $meterno;
        }      
        // "BPE-NGEN-OR", "45028692791"
}
