<?php

namespace App\Http\Livewire\Utilities;

use App\Models\User;
use App\Models\Utilities\Payloads\ElectricityPayload;
use App\Models\Utilities\ProductList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Electricity extends Component
{
    public $success_message = "";
    public $error_message = "";
    public $electricity_list;
    public $electricity_index;
    public $meter_no;
    public $meter_info;
    public $isMeterVerified = false;
    public $amount;
    public $mtype;
    public $user;

    protected $rules = [
        "mtype" => "required"
    ];

    public function mount()
    {
        $this->user = User::find(Auth::user()->id);
        $this->electricity_list = ProductList::getElectricityList();
    }

    public function resetMeter()
    {
        $this->isMeterVerified = false;
        $this->meter_info = "";
    }
    public function verifyMeter()
    {
        $res = ProductList::validateMeterNo($this->electricity_list[$this->electricity_index]["product_id"], $this->meter_no);
        if ($res->code == "100") {
            $this->meter_info = $res->message;
            $this->isMeterVerified = true;
        } else {
            $this->meter_info = "Failed - " . $res->message;
            $this->isMeterVerified = false;
        }
    }

    public function buyElectricityBill()
    {
        $this->validate();
        if ($this->user->wallet()->getBalance("ngn") < $this->amount) {
            $this->error_message = "Insufficient balance";
            return;
        } elseif (
            $this->amount < $this->electricity_list[$this->electricity_index]['min_denomination'] ||
            $this->amount > $this->electricity_list[$this->electricity_index]['max_denomination'] ||
            $this->amount % 100 != 0
        ) {
            $this->error_message = "Amount should be between N" . number_format($this->electricity_list[$this->electricity_index]['min_denomination']) . " to N" .
                number_format($this->electricity_list[$this->electricity_index]['max_denomination']) . " and must be a multiple of 100";
            return;
        }
        $payload = new ElectricityPayload($this->electricity_list[$this->electricity_index]["product_id"], $this->mtype, $this->meter_no);
        $utility = $this->user->utility()->create([
            "price" => $this->amount,
            "payload" => json_encode($payload),
            "utility_type_id" => "1",
            "reference" => Str::uuid()
        ]);

        try {

            $res = json_decode($utility->buyElectricity());

            if ($res->status == "failed") {
                $res = json_decode($res->response);
                $this->success_message = "";
                $this->error_message = "Failed to pay electricity bill  - " . $res->message;
            } else {
                $this->error_message = "";
                $this->success_message = "Purchased successfully - Pin: " . $res->pincode;
            }
        } catch (\Throwable $th) {
            $this->error_message = "Could not purchase data" . $th->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.utilities.electricity');
    }
}
