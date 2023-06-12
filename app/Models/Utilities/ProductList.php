<?php

namespace App\Models\Utilities;

use App\Classes\GetAppEnv;

class ProductList
{

    /**
     * getDataList - Functio to get list of direct data bundles
     * @network  - name of the network // mtn, airtel, glo, 9mobile
     * Return: List of data bundles offered by the network provider
     */
    public static function getDataList($network, $type = "sme")
    {
        if ($type == "sme") {
            $network = Network::where("network_name", strtoupper($network))->first();
            if ($network) {
                return $network->data->all();
            }
        } else {
            $dataList = file_get_contents("https://mobileairtimeng.com/httpapi/get-items?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey() . "&service=" . $network);
            $dataList = json_decode($dataList);
            if (isset($dataList->products)) {
                return $dataList->products;
            }
        }
        return [];
    }

}
