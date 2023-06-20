<?php

namespace App\Http\Livewire\Utilities;

use App\Models\User;
use App\Models\Utilities\Payloads\DirectDataPayload;
use App\Models\Utilities\Payloads\SMEDataPayload;
use App\Models\Utilities\ProductList;
use App\Models\Utilities\Utility;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Data extends Component
{
    public $networks;
    public $network;
    public $amount;
    public $phone_number;
    public $success_message = "";
    public $error_message = "";
    public $data_list;
    public $data_types;
    public $data_type;
    public $user;

    protected $rules = [
        "amount" => "required",
        "network" => "required",
        "phone_number" => "required|regex:/^0[0-9]{10}$/|size:11"
    ];

    public function mount()
    {
        $this->networks = array(
            "mtn",
            "glo",
            "airtel",
            "9mobile"
        );

        $this->data_types = ["sme", "Direct Bundles"];

        $this->user = User::find(Auth::user()->id);
    }

    public function onChooseNetwork()
    {
        $this->data_type = null;
        $this->amount = null;
    }

    public function dataList($type)
    {

        $this->amount = null;
        $dataList = [];
        $dataL =  ProductList::getDataList($this->network, $type);

        if ($type == "sme") {
            foreach ($dataL as $data) {
                array_push(
                    $dataList,
                    array(
                        "network_id" => $data->network_id,
                        "discountAmount" => $this->user->level->getDiscountPrice($data->amount, $this->user->affiliate_level_id, 1),
                        "amount" => $data->amount,
                        "size" => $data->size,
                        "validity" => "Monthly"
                    )
                );
            }
        } else {
            foreach ($dataL as $data) {

                $strArray = explode(" ", $data->data);
                $validity = $strArray[1];
                if ($this->network == "airtel" || $this->network == "9mobile") {
                    $validity = explode(")", explode("(", $data->data)[1])[0];
                }
                array_push(
                    $dataList,
                    array(
                        "discountAmount" => $this->user->level->getDiscountPrice($data->amount, $this->user->affiliate_level_id, 1),
                        "amount" => $data->amount,
                        "size" =>  $strArray[0],
                        "validity" => $validity,
                        "product_id" => $data->id ?? ""
                    )
                );
            }
        }

        $this->data_list = $dataList;
    }

    public function buyData()
    {
        $this->validate();
        $datainfo = $this->data_list[$this->amount];
        if ($this->user->wallet()->getBalance("ngn") < $datainfo["discountAmount"])
        {
            $this->error_message = "Insufficient balance";
            return;
        }
        if ($this->data_type == "sme") {
            $payload = new SMEDataPayload(Utility::getDataSize($datainfo["size"]), $this->phone_number);
            $utility = $this->user->utility()->create([
                "price" => $datainfo["amount"],
                "payload" => json_encode($payload),
                "utility_type_id" => "1",
                "reference" => Str::uuid()
            ]);
        } else {
            $payload = new DirectDataPayload(Utility::getDataSize($datainfo["size"]), $this->phone_number, $this->network == "airtel" ? $datainfo["product_id"] : $datainfo["amount"]);
            $utility = $this->user->utility()->create([
                "price" => $datainfo["amount"],
                "payload" => json_encode($payload),
                "utility_type_id" => "1",
                "reference" => Str::uuid()
            ]);
        }

        try {
            if ($this->data_type == "sme"){
            $res = json_decode($utility->buySme($this->network));
            }
            else{
                $res = json_decode($utility->buyDirectData());
            }
            if ($res->status == "failed")
            {
             $this->success_message = "";
             $this->error_message = "Failed to buy data.";
            }
            else{
             $this->error_message = "";
             $this->success_message = "Data purchased successfully";
            }
        } catch (\Throwable $th) {
            $this->error_message = "Could not purchase data".$th->getMessage();
        }
    }
    public function render()
    {
        return view('livewire.utilities.data');
    }
}
