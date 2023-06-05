<?php

namespace App\Models\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public function data()
    {
        return $this->belongsTo(Network::class, "network_name", "network_name");
    }
}
