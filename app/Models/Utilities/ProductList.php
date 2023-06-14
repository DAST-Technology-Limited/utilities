<?php

namespace App\Models\Utilities;

use App\Classes\GetAppEnv;

class ProductList
{

    /**
     * getDataList - Function to get list of direct data bundles
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


    /**
     * getElectricityList - Function to get list of utility bills.
     * Return: List of of electricity packages
     */

    public static function getElectricityList()
    {
        $response = file_get_contents("http://mobileairtimeng.com/httpapi/power-lists?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey());
        return json_decode($response);
    }

    /**
     * validateMeterNo - Function to validate meter no of a user
     * @param: service - the product_id of the Electricity company/DISCO
     * @param: meterno - customer meter number
     * Return: List of of electricity packages
     */

    public static function validateMeterNo($service, $meterno)
    {
        $response = file_get_contents("http://mobileairtimeng.com/httpapi/power-validate?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey() . "&service=" . $service . "&meterno=" . $meterno . "&jsn=json");
        return json_decode($response);
    }


    /**
     * verifyCableCustomer - function to verify a cable customer
     * @param: bill = startimes, gotv or dstv  - App\Enums\Cable
     * @param: smartno = smart card number or IUC number
     */

    public static function verifyCableCustomer($bill, $smartno)
    {
        $response = file_get_contents("https://mobileairtimeng.com/httpapi/customercheck?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey() . "&bill=" . $bill . "&smartno=" . $smartno . "&jsn=json");
        return json_decode($response);
    }

    /**
     * getPackage - Function to get cable package list
     * @param: cable_type - App\Enums\Cable
     * Return: Cable package list
     */

    public static function getPackage($cable_type)
    {
        $response = file_get_contents("https://mobileairtimeng.com/httpapi/get-items?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey() . "&service=" . $cable_type . "&jsn=json");
        return json_decode($response);
    }
}
