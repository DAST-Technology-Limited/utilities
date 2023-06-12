<?php

namespace App\Models\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function data()
    {
        return $this->hasMany(Data::class, "network_id", "network_id");
    }
}
