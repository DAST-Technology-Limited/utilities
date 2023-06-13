<?php

namespace App\Models\Utilities\Payloads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\Payloads\DataPayload;

class SMEMTNDataPayload extends DataPayload
{
    public $datasize;
    
    public function __construct(
        $datasize,
        $network = "1",
        $phone
    )
    {
        parent::__construct($phone, $network);
        $this->datasize = $datasize;
    }
}
