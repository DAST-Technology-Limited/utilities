<?php

namespace App\Models\Utilities\Payloads;

use App\Models\Utilities\Payloads\DataPayload;

class DirectDataPayload extends DataPayload
{
    public $datasize; // datasize
    public $product_or_amt; //product_id or the price for the data
    public function __construct(
        $datasize,
        $phone,
        $product_or_amt,
        $network = "1"
    ) {
        parent::__construct($phone, $network);
        $this->datasize = $datasize;
        $this->product_or_amt = $product_or_amt;
    }
}
