<?php

namespace App\Classes;

class GetAppEnv
{

    public static function getMobileAirtimeKey()
    {
        return env("MOBILE_AIRTIME_API_KEY");
    }
        public static function getMobileAirtimePhone()
    {
        return env("MOBILE_AIRTIME_PHONE");
    }
}
