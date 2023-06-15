<?php

namespace App\Http\Livewire\Funding;

use App\Models\Funds\Currency;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $amount;
    public $currency;
    public $currencies;

    protected $rules = [
        "amount" => "required",
        "currency" => "required"
    ];

    public function mount()
    {
        $this->currencies = Currency::all();
    }
    public function createPayment()
    {
        $this->validate();
        $user = User::find(Auth::user()->id);
        $payment = $user->vellafinance()->create([
            "currency_id" => $this->currency,
            "amount" => $this->amount,
            "reference" => Str::uuid()
        ]);
        try {
            $data = json_decode($payment->getPaymentLink()->getBody());
            if ($data->status == "success")
            {
                return redirect($data->data->payment_url);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function render()
    {
        return view('livewire.funding.index');
    }
}
