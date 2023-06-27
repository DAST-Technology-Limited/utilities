<?php

namespace App\Http\Livewire\Utilities;

use App\Models\User;
use App\Models\Utilities\Network;
use App\Models\Utilities\NetworkId;
use App\Models\Utilities\Payloads\AirtimePayload;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Airtime extends Component
{
    public $networks;
    public $network;
    public $amount;
    public $phone_number;
    public $success_message = "";
    public $error_message = "";

    protected $rules = [
        "amount" => "required",
        "network" => "required",
        "phone_number" => "required|regex:/^0[0-9]{10}$/|size:11"
    ];

    public function mount()
    {
        $this->networks = array("mtn",
        "mtn_awufu",
        "glo",
        "airtel",
        "9mobile");
    }


    public function buyAirtime()
    {
        
        $user = User::find(Auth::user()->id);
        if ($user->wallet()->getBalance("ngn") < $this->amount)
        {
            $this->error_message = "Insufficient balance";
            return;
        }
        $this->validate();
        $networkId = new NetworkId();
        $payload = new AirtimePayload($this->phone_number, $networkId->getNetworkId($this->network), $this->amount);
        $utility = $user->utility()->create([
            "price" => $this->amount,
            "payload" => json_encode($payload),
            "utility_type_id" => "2",
            "reference" => Str::uuid()
        ]);

        try {
            $res = json_decode($utility->buyAirtime());
            if ($res->status == "failed")
            {
             $this->success_message = "";
             $this->error_message = "Failed to buy airtime.";
            }
            else{
             $this->error_message = "";
             $this->success_message = "Airtimed purchased successfully";
            }
        } catch (\Throwable $th) {
            $this->error_message = "Could not purchase airtime".$th->getMessage();
        }
      
      
    }
    public function render()
    {
        return view('livewire.utilities.airtime');
    }
}
