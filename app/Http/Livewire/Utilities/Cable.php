<?php

namespace App\Http\Livewire\Utilities;

use App\Models\User;
use App\Models\Utilities\Payloads\GOTVDSTVPayload;
use App\Models\Utilities\Payloads\StarTimesPayload;
use App\Models\Utilities\ProductList;
use App\Models\Utilities\Utility;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Cable extends Component
{
    // Verifying Customer
    public $bill; //= startimes, gotv or dstv
    public $smartno; //= smart card number or IUC number

    // Startime Recharge
    public $pass;  //= api key
    public $amt;  //= amount to recharge
    public $phone;  //= phone number for notification
    public $vcode;  //= product code obtained from the get packages API
    public $user_ref; //= user defined reference

    // GOTV/DSTV Recharge
    public $customer; //= customer name received during customer check
    public $invoice; //= invoice number received during customer check
    public $billtype; //= gotv or dstv or startimes
    public $product; //= product code obtained from the get packages API
    public $customernumber; //= unique customer number retrieved during customer check, this is not the phone number or IUC number
    public $customerName; //
    
    public $bill_types;
    public $success_message = "";
    public $error_message = "";
    public $title = "Cable Recharge";
    public $cable_info;
    public $is_customer_verified = false;
    public $user;

    public function mount()
    {
        $this->billtype = isset($_GET["bill"]) ? $_GET["bill"] : "";
        $this->bill_types = array(
            "startimes",
            "gotv",
            "dstv"
        );

        $this->user = User::find(Auth::user()->id);
    }

    public function resetCableNo()
    {
        $this->is_customer_verified = false;
        $this->cable_info = "";
    }
    public function verifyCustomer()
    {
        $res = ProductList::verifyCableCustomer($this->billtype, $this->smartno);
        if ($res->code == "100") {
            $this->cable_info = $res->customerName;
            $this->customerName = $res->customerName;
            $this->is_customer_verified = true;
        } else {
            $this->error_message = $res->message;
            $this->is_customer_verified = false;
        }
    }

    public function buyCable()
    {
        // $this->validate();
        // $datainfo = $this->data_list[$this->amount];
        // if ($this->user->wallet()->getBalance("ngn") < $datainfo["discountAmount"])
        // {
        //     $this->error_message = "Insufficient balance";
        //     return;
        // }
        // if ($this->data_type == "sme") {
        //     $payload = new StarTimesPayload(Utility::getDataSize($datainfo["size"]), $this->phone_number);
        //     $utility = $this->user->utility()->create([
        //         "price" => $datainfo["amount"],
        //         "payload" => json_encode($payload),
        //         "utility_type_id" => "1",
        //         "reference" => Str::uuid()
        //     ]);
        // } else {
        //     $payload = new DirectDataPayload(Utility::getDataSize($datainfo["size"]), $this->phone_number, $this->network == "airtel" ? $datainfo["product_id"] : $datainfo["amount"]);
        //     $utility = $this->user->utility()->create([
        //         "price" => $datainfo["amount"],
        //         "payload" => json_encode($payload),
        //         "utility_type_id" => "1",
        //         "reference" => Str::uuid()
        //     ]);
        // }

        // try {
        //     if ($this->data_type == "sme"){
        //     $res = json_decode($utility->buySme($this->network));
        //     }
        //     else{
        //         $res = json_decode($utility->buyDirectData());
        //     }
        //     if ($res->status == "failed")
        //     {
        //      $this->success_message = "";
        //      $this->error_message = "Failed to buy data.";
        //     }
        //     else{
        //      $this->error_message = "";
        //      $this->success_message = "Data purchased successfully";
        //     }
        // } catch (\Throwable $th) {
        //     $this->error_message = "Could not purchase data".$th->getMessage();
        // }
    }

    public function buyGOTVDSTV()
    {
        // $this->validate();
        // $datainfo = $this->data_list[$this->amount];
        // if ($this->user->wallet()->getBalance("ngn") < $datainfo["discountAmount"])
        // {
        //     $this->error_message = "Insufficient balance";
        //     return;
        // }
        // if ($this->data_type == "sme") {
        //     $payload = new StarTimesPayload(Utility::getDataSize($datainfo["size"]), $this->phone_number);
        //     $utility = $this->user->utility()->create([
        //         "price" => $datainfo["amount"],
        //         "payload" => json_encode($payload),
        //         "utility_type_id" => "1",
        //         "reference" => Str::uuid()
        //     ]);
        // } else {
        //     $payload = new DirectDataPayload(Utility::getDataSize($datainfo["size"]), $this->phone_number, $this->network == "airtel" ? $datainfo["product_id"] : $datainfo["amount"]);
        //     $utility = $this->user->utility()->create([
        //         "price" => $datainfo["amount"],
        //         "payload" => json_encode($payload),
        //         "utility_type_id" => "1",
        //         "reference" => Str::uuid()
        //     ]);
        // }

        // try {
        //     if ($this->data_type == "sme"){
        //     $res = json_decode($utility->buySme($this->network));
        //     }
        //     else{
        //         $res = json_decode($utility->buyDirectData());
        //     }
        //     if ($res->status == "failed")
        //     {
        //      $this->success_message = "";
        //      $this->error_message = "Failed to buy data.";
        //     }
        //     else{
        //      $this->error_message = "";
        //      $this->success_message = "Data purchased successfully";
        //     }
        // } catch (\Throwable $th) {
        //     $this->error_message = "Could not purchase data".$th->getMessage();
        // }
    }
    public function render()
    {
        return view('livewire.utilities.cable');
    }
}
