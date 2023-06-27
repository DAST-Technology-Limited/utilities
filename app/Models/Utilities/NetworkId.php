<?php

namespace App\Models\Utilities;


class NetworkId {

    public $networks = array(
            "mtn" => 15,
            "mtn_awufu" => 20,
            "glo" => 6,
            "airtel" => 1,
            "9mobile" => 2
    );

    public function  getNetworkId($network)
    {
        $network = strtolower($network);
        if (isset($this->networks[$network]))
        {
            return $this->networks[$network];
        }
        return 0;
    }
}
