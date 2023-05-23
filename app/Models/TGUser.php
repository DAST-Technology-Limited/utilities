<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TGUser extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function chats()
    {
        return $this->hasMany(ChatGPT::class, "t_g_user_id");
    }
}
