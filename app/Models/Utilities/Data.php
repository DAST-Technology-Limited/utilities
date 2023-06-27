<?php

namespace App\Models\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public function network()
    {
        return $this->belongsTo(Network::class, "network_id", "network_id");
    }
}
