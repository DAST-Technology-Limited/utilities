<?php

namespace App\Models\Utilities\Payloads;

use App\Models\Utilities\Payloads\DataPayload;

class SMEDataPayload extends DataPayload
{
    public $datasize;
    
    public function __construct(
        $datasize,
        $phone,
        $network = "1"
    )
    {
        parent::__construct($phone, $network);
        $this->datasize = $datasize;
    }
}
