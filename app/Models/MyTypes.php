<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyTypes extends Model
{
    use HasFactory;
    public $currencies;

    public function __construct()
    {
        $this->currencies = ['ngn', 'usd'];
    }
    
    public function getCurrencies()
    {
        return $this->currencies;
    }
}
