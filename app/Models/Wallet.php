<?php

namespace App\Models;

use App\Models\Funds\Currency;
use App\Models\Funds\FundingHistory;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    public $mytypes;

    public function __construct()
    {
        $this->mytypes = new MyTypes();
    }

    protected $fillable = ["user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fundingHistory()
    {
        return $this->hasMany(FundingHistory::class);
    }

    public function credit($currency, $amount, $desc = "", $details = "")
    {
        $_currency = Currency::where("symbol", $currency)->first();
        if (!$_currency) {
            throw new Exception("Invalid currency");
        }
        if ($amount < 0) {
            throw new Exception("Invalid amount");
        }
        $bal = json_decode($this->balances);
        if ($bal->$currency) {
            $bal->$currency += $amount;
        } else {
            $bal->$currency  = $amount;
        }
        $this->balances = json_encode($bal);
        $this->save();

        $this->fundingHistory()->create([
            "currency_id" => $_currency->id,
            "type" => "credit",
            "amount" => $amount,
            "desc" => $desc,
            "details" => $details
        ]);
    }

    public function debit($currency, $amount, $desc = "", $details = "")
    {
        $_currency = Currency::where("symbol", $currency)->first();
        if (!$_currency) {
            throw new Exception("Invalid currency");
        }
        if ($amount <= 0 || !is_numeric($amount)) {
            throw new Exception("Invalid amount");
        }

        if ($amount > $this->getBalance($currency))
        {
            
            throw new Exception("Insufficient balance");
        }
        
        $bal = json_decode($this->balances);
        $bal->$currency -= $amount;
        $this->balances = json_encode($bal);
        $this->save();

        $this->fundingHistory()->create([
            "currency_id" => $_currency->id,
            "type" => "debit",
            "amount" => $amount,
            "desc" => $desc,
            "details" => $details
        ]);
    }

    public function getBalances()
    {
        return json_decode($this->balances);
    }

    public function getBalance($currency)
    {
        $bals =  json_decode($this->balances);
        return isset($bals->$currency) ? $bals->$currency : 0;
    }
}
