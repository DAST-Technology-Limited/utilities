<?php

namespace App\Http\Livewire\Utilities;

use App\Enums\Status;
use App\Models\User;
use App\Models\Utilities\Payloads\ResultCheckerPayload;
use App\Models\Utilities\ResultChecker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class Neco extends Component
{
    public $success_message = "";
    public $error_message = "";
    public $price;
    public $discountPrice;
    public $user;
    public $neco;
    public $result_checker_name;
    
    public function mount()
    {
        $this->neco = ResultChecker::where("name", "neco")->first();
        $this->result_checker_name = $this->neco->name;
        $this->price = $this->neco->price;
        $this->user = User::find(Auth::user()->id);
        $this->discountPrice = $this->user->level->getDiscountPrice($this->neco->price, $this->user->affiliate_level_id, 5);
    }

    public function buyNecoPin()
    {
        if ($this->user->wallet()->getBalance("ngn") < $this->discountPrice)
        {
            $this->error_message = "Insufficient balance";
            return;
        }

        $payload = new ResultCheckerPayload($this->neco->name, 1);
        $utility = $this->user->utility()->create([
            "price" => $this->neco->price,
            "payload" => json_encode($payload),
            "utility_type_id" => "5",
            "reference" => Str::uuid()
        ]);

        try {
            $res = json_decode($utility->buyNeco());
          
            if ($res->status == Status::FAILED())
            {
             $this->success_message = "";
             $response = json_decode($res->response);
             $this->error_message = "Failed to buy NECO PIN.\n Try again\n".$response->message;
            }
            else{
             $this->error_message = "";
             $response = json_decode($res->response);
             $this->success_message = "NECO Pin purchased successfully\n\nPin: ". $response->pin;
             
            }
        } catch (\Throwable $th) {
            $this->error_message = "Could not purchase data".$th->getMessage();
        }

    }

    public function render()
    {
        return view('livewire.utilities.neco');
    }
}
