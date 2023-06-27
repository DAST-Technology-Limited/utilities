<?php

namespace App\Http\Livewire\Utilities;

use App\Enums\Status;
use App\Models\User;
use App\Models\Utilities\Payloads\ResultCheckerPayload;
use App\Models\Utilities\ResultChecker;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Waec extends Component
{
    public $success_message = "";
    public $error_message = "";
    public $price;
    public $discountPrice;
    public $user;
    public $waec;
    public $result_checker_name;
    
    public function mount()
    {
        $this->waec = ResultChecker::where("name", "waec")->first();
        $this->result_checker_name = $this->waec->name;
        $this->price = $this->waec->price;
        $this->user = User::find(Auth::user()->id);
        $this->discountPrice = $this->user->level->getDiscountPrice($this->waec->price, $this->user->affiliate_level_id, 5);
    }

    public function buyWaecPin()
    {
        if ($this->user->wallet()->getBalance("ngn") < $this->discountPrice)
        {
            $this->error_message = "Insufficient balance";
            return;
        }

        $payload = new ResultCheckerPayload($this->waec->name, 1);
        $utility = $this->user->utility()->create([
            "price" => $this->waec->price,
            "payload" => json_encode($payload),
            "utility_type_id" => "5",
            "reference" => Str::uuid()
        ]);

        try {
            $res = json_decode($utility->buyWaec());
          
            if ($res->status == Status::FAILED())
            {
             $this->success_message = "";
             $response = json_decode($res->response);
             $this->error_message = "Failed to buy WAEC PIN.\n Try again\n".$response->message;
            }
            else{
             $this->error_message = "";
             $response = json_decode($res->response);
             $this->success_message = "WAEC Pin purchased successfully\nSerial No: ". $response->serial."\nPin: ". $response->serial;
             
            }
        } catch (\Throwable $th) {
            $this->error_message = "Could not purchase data".$th->getMessage();
        }

    }

    public function render()
    {
        return view('livewire.utilities.waec');
    }
}
