<?php

namespace App\Models\Utilities;

use App\Classes\GetAppEnv;
use App\Enums\Status;
use App\Models\User;
use App\Models\Utilities\Payloads\SMEDataPayloadPayloads\DataPayload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use PhpParser\Node\Stmt\TryCatch;

class Utility extends Model
{
    /**
     * This class is general utility model, it carries all the functionally
     * for communicating with utility api endpoints.
     */
    use HasFactory;

    protected $guarded = [];

    public $userid; // your registered number
    public $pass; // api key


    public function __construct()
    {
        $this->userid = GetAppEnv::getMobileAirtimePhone();
        $this->pass = GetAppEnv::getMobileAirtimeKey();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get a discounted price of a product
     */

    public function getPrice($utility_type_id)
    {
        return $this->user->level->getDiscountPrice($this->price, $this->user->affiliate_level_id, $utility_type_id);
    }

    /**
     * getDataSize - used to get the actual data size E.G. 500MB = 500, 1GB = 1000
     * @param: $sise - size in MB OR GB OR TB
     */

     public static function getDataSize($size)
     {
        if (str_contains($size, "MB"))
        {
            return explode("MB", $size)[0];
        }
        else if(str_contains($size, "GB"))
        {
            return explode("GB", $size)[0] * 1000;
        }
        else if(str_contains("TB", $size))
        {
            return explode("TB", $size)[0] * 1000000;
        }
        else {
            return $size;
        }
     }

    /**
     * Function to buy mtn sme data.
     * It is assumed that the utility payloads (App\Models\Utilities\Payloads\SMEDataPayload) has been
     * stored in the 'utiliies' tables so this function fetches 
     * the payload and use it to process the transactions
     */
    public function buyMtnSme()
    {
        $user = $this->user;
        try {
            $user->wallet()->debit("ngn", $this->getPrice("1"), "MTN Data purchase", $this->payload);
            $payload = json_decode($this->payload);
            $response = file_get_contents("https://mobileairtimeng.com/httpapi/datashare?userid=" . $this->userid . "&pass=" . $this->pass . "&network=" . $payload->network . "&phone=" . $payload->phone . "&datasize=" . $payload->datasize . "&jsn=json&user_ref=" . $this->reference);
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $user->wallet()->credit("ngn", $this->getPrice("1"), "Refund failed data purchase", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }


    /**
     * Function to buy Airtel sme data.
     * It is assumed that the utility payloads (App\Models\Utilities\Payloads\SMEDataPayload) has been
     * stored in the 'utiliies' tables so this function fetches 
     * the payload and use it to process the transactions
     */
    public function buyAirtelSme()
    {
        $user = $this->user;
        try {
            $user->wallet()->debit("ngn", $this->getPrice("1"), "Airtel Data purchase", $this->payload);
            $payload = json_decode($this->payload);
            $response = file_get_contents("https://mobileairtimeng.com/httpapi/airtel_data_share?userid=" . $this->userid . "&pass=" . $this->pass . "&phone=" . $payload->phone . "&datasize=" . $payload->datasize . "&jsn=json&user_ref=" . $this->reference);
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $user->wallet()->credit("ngn", $this->getPrice("1"), "Refund failed airtel data purchase", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }

    /**
     * Function to buy Glo sme data.
     * It is assumed that the utility payloads (App\Models\Utilities\Payloads\SMEDataPayload) has been
     * stored in the 'utiliies' tables so this function fetches 
     * the payload and use it to process the transactions
     */
    public function buyGloSme()
    {
        $user = $this->user;
        try {
            $user->wallet()->debit("ngn", $this->getPrice("1"), "Glo Data purchase", $this->payload);
            $payload = json_decode($this->payload);
            $response = file_get_contents("https://mobileairtimeng.com/httpapi/glo_data_share?userid=" . $this->userid . "&pass=" . $this->pass . "&phone=" . $payload->phone . "&datasize=" . $payload->datasize . "&jsn=json&user_ref=" . $this->reference);
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $user->wallet()->credit("ngn", $this->getPrice("1"), "Refund failed Glo data purchase", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }

    /**
     * buySme() - function to buy an same data based on the network
     * @param: $network - airtel, 9mobile, glo, mtn
     * Return: ["status => "sting", "response" => object]
     */

     public function buySme($network)
     {
       if ($network == "airtel")
        {
            return $this->buyAirtelSme();
        }
        elseif  ($network == "mtn")
        {
            return $this->buyMtnSme();
        }
        else if ($network == "glo")
        {
            return $this->buyGloSme();
        }
        else 
        {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => ""
            ]);
        }
     }

    /**
     * buyDirectData - function to purchase direct data bundles
     * It is expected that 'App\Models\Utilities\Utility' has been
     */

    public function buyDirectData()
    {
        
        try {
            $payload = json_decode($this->payload);
            $this->user->wallet()->debit("ngn", $this->getPrice("1"), "Data purchase - " . $payload->phone, $this->payload);
            if ($payload->network == "1") {
                $response = file_get_contents("https://mobileairtimeng.com/httpapi/datatopup?userid=" . $this->userid . "&pass=" . $this->pass . "&network=" . $payload->network . "&phone=" . $payload->phone . "&product=" . $payload->product_or_amt . "&jsn=json");
            } else {
                $response = file_get_contents("https://mobileairtimeng.com/httpapi/datatopup?userid=" . $this->userid . "&pass=" . $this->pass . "&network=" . $payload->network . "&phone=" . $payload->phone . "&amt=" . $payload->product_or_amt . "&jsn=json");
            }

            $res = json_decode($response);
           
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $this->user->wallet()->credit("ngn", $this->getPrice("1"), "Refund failed data purchase - " . $payload->phone, $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }

    /**
     * buyAirtime - function to purchase airtime
     * It is expected that 'App\Models\Utilities\Utility' has been
     * created and payload 'App\Models\Utilities\Payloads\AirtimePayload' saved
     */

    public function buyAirtime()
    {
        try {
            $payload = json_decode($this->payload);
            $this->user->wallet()->debit("ngn", $this->getPrice("2"), "Airtime purchase - " . $payload->phone, $this->payload);

            $response = file_get_contents("https://mobileairtimeng.com/httpapi/?userid=" . $this->userid . "&pass=" . $this->pass . "&network=" . $payload->network . "&phone=" . $payload->phone . "&amt=" . $payload->amt . "&user_ref=" . $this->reference . "&jsn=json");
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $this->user->wallet()->credit("ngn", $this->getPrice("2"), "Refund failed airtime purchase - " . $payload->phone, $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }


    /**
     * buyWaec - function to purchase WAEC result checker pins
     * It is expected that 'App\Models\Utilities\Utility' has been
     * created and payload 'App\Models\Utilities\Payloads\ResultCheckerPayload' saved
     */

    public function buyWaec()
    {
        try { 
            $payload = json_decode($this->payload);
            $this->user->wallet()->debit("ngn", $this->getPrice("5"), "WAEC result checker pin", $this->payload);
          
            $response = file_get_contents("https://mobileairtimeng.com/httpapi/waecdirect?userid=" . $this->userid . "&pass=" . $this->pass . "&jsn=json&user_ref=" . $this->reference. "");
            $res = json_decode($response);

            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $this->user->wallet()->credit("ngn", $this->getPrice("5"), "Refund failed WAEC pin purchase ", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }

    /**
     * buyNeco - function to purchase NECO result checker pins
     * It is expected that 'App\Models\Utilities\Utility' has been
     * created and payload 'App\Models\Utilities\Payloads\ResultCheckerPayload' saved
     */

    public function buyNeco()
    {
        try {
            $payload = json_decode($this->payload);
            $this->user->wallet()->debit("ngn", $this->getPrice("5"), "NECO result checker pin", $this->payload);

            $response = file_get_contents("https://mobileairtimeng.com/httpapi/neco?userid=" . $this->userid . "&pass=" . $this->pass . "&pcs=" . $payload->quantity . "&jsn=json&user_ref=" . $this->reference);
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $this->user->wallet()->credit("ngn", $this->getPrice("5"), "Refund failed NECO pin purchase", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }

    /**
     * buyElectricity - function to purchase electricity bills pins
     * It is expected that 'App\Models\Utilities\Utility' has been
     * created and payload 'App\Models\Utilities\Payloads\ElectricityPayload' saved
     */

    public function buyElectricity()
    {
        try {
            $payload = json_decode($this->payload);
            $this->user->wallet()->debit("ngn", $this->getPrice("3"), "Eletricity bill", $this->payload);

            $response = file_get_contents("http://mobileairtimeng.com/httpapi/power-pay?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey() . "&user_ref=" . $this->reference . "&service=" . $payload->service . "&meterno=" . $payload->meterno . "&mtype=" . $payload->mtype . "&amt=" . $this->getPrice("3") . "&jsn=json");
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $this->user->wallet()->credit("ngn", $this->getPrice("3"), "Refund failed electricity bill purchase", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }

    /**
     * buyStarTimes - function to purchase StarTimes cable
     * It is expected that 'App\Models\Utilities\Utility' has been
     * created and payload 'App\Models\Utilities\Payloads\StarTimesPayload' saved
     */

    public function buyStarTimes()
    {
        try {
            $payload = json_decode($this->payload);
            $this->user->wallet()->debit("ngn", $this->getPrice("4"), "StarTimes purchase", $this->payload);

            $response = file_get_contents("https://mobileairtimeng.com/httpapi/startimes-u?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey() . "&phone=" . $payload->phone . "&amt=" . $payload->amt . "&smartno=" . $payload->smartno . "&vcode=" . $payload->vcode . "&jsn=json&user_ref=" . $this->reference);
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $this->user->wallet()->credit("ngn", $this->getPrice("4"), "Refund failed startimes purchase", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }

    /**
     * buyGOTVDSTV - function to purchase GOTVDSTV cable
     * It is expected that 'App\Models\Utilities\Utility' has been
     * created and payload 'App\Models\Utilities\Payloads\GOTVDSTVPayload' saved
     */

    public function buyGOTVDSTV()
    {
        try {
            $payload = json_decode($this->payload);
            $this->user->wallet()->debit("ngn", $this->getPrice("4"), strtoupper($payload->billtype) . " purchase", $this->payload);

            $response = file_get_contents("https://mobileairtimeng.com/httpapi/multichoice?userid=" . GetAppEnv::getMobileAirtimePhone() . "&pass=" . GetAppEnv::getMobileAirtimeKey() . "&phone=" . $payload->phone . "&amt=" . $payload->amt . "&smartno=" . $payload->smartno . "&product=" . $payload->product . "&customer=" . $payload->customer . "&invoice=" . $payload->invoice . "&billtype=" . $payload->billtype . "&customernumber=" . $payload->customernumber . "&jsn=json");
            $res = json_decode($response);
            if ($res->code == "100") {
                $this->status = Status::APPROVED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::SUCCESS(),
                    "response" => $response
                ]);
            } else {
                $this->user->wallet()->credit("ngn", $this->getPrice("4"), "Refund failed " . strtoupper($payload->billtype) . " purchase", $response);
                $this->status = Status::FAILED();
                $this->response = $response;
                $this->save();
                return json_encode([
                    "status" => Status::FAILED(),
                    "response" => $response
                ]);
            }
        } catch (\Throwable $th) {
            return json_encode([
                "status" => Status::FAILED(),
                "response" => $th
            ]);
        }
    }
}
