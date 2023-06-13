<?php

namespace App\Models\Utilities;

use App\Enums\Status;
use App\Models\User;
use App\Models\Utilities\Payloads\DataPayload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

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
        $this->userid = env("MOBILE_AIRTIME_PHONE");
        $this->pass = env("MOBILE_AIRTIME_API_KEY");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Function to buy mtn sme data.
     * It is assumed that the utility payloads has been
     * stored in the 'utiliies' tables so this function fetches 
     * the payload and use it to process the transactions
     */
    public function buyMtnSme()
    {
        // $user_price = $this->user->getData
        // dd($this->user->wallet()->getBalance("ngn"));
        // $payload = json_decode($this->payload);
        // $response = file_get_contents("https://mobileairtimeng.com/httpapi/datashare?userid=".$this->userid."&pass=".$this->pass."&network=".$payload->network."&phone=".$payload->phone."&datasize=".$payload->datasize."&jsn=json&user_ref=".$payload->reference);
        $response = '{"code":100,"message":"Data recharge completed","batchno":"ff483d562a01ecb70c5a",
            "amount_charged":"108.50"}';
        $res = json_decode($response);
        if ($res->code) {
            $this->status = Status::APPROVED();
            $this->res = json_encode($response);
            $this->save();
        } else {
            $this->status = Status::FAILED();
            $this->res = json_encode($response);
            $this->save();
        }
    }
}
