<?php

namespace App\Models;

use App\Models\Funds\VellaFinance;
use App\Models\Utilities\Utility;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function wallet()
    {
        $this->hasOne(Wallet::class)->firstOrCreate();
        return $this->hasOne(Wallet::class)->firstOrCreate();
    }

    public function vellafinance()
    {
        return $this->hasMany(VellaFinance::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class, "affiliate_level_id", "id");
    }

    public function utility()
    {
        return $this->hasMany(Utility::class);
    }
}
