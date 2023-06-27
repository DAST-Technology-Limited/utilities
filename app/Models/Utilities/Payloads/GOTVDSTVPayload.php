<?php

namespace App\Models\Utilities\Payloads;

class GOTVDSTVPayload
{
    public $smartno; // decoder number
    public $customer; // customer name received during customer check
    public $invoice; // invoice number received during customer check
    public $billtype; // gotv or dstv
    public $product; // product code obtained from the get packages API
    public $amt; // recharge or bouquet in amount.
    public $customernumber; // unique customer number retrieved during customer check, this is not the phone number or IUC number

    public function __construct(
        $smartno,
        $customer,
        $invoice,
        $billtype,
        $product,
        $amt,
        $customernumber
    )
    {
        $this->smartno = $smartno;
        $this->customer = $customer;
        $this->invoice = $invoice;
        $this->billtype = $billtype;
        $this->product = $product;
        $this->amt = $amt;
        $this->customernumber = $customernumber;
        
    }
}
