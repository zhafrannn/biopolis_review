<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use  App\Models\UserBiodata;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

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
        'password' => 'hashed',
    ];

    public function user_biodata()
    {
        return $this->hasOne(UserBiodata::class); // Sesuaikan dengan model Biodata Anda
    }

    public function user_payment()
    {
        return $this->hasMany(UserPayment::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }

    public function user_wallet()
    {
        return $this->hasOne(UserWallet::class); // Sesuaikan dengan model Biodata Anda
    }
    public function user_notification()
    {
        return $this->hasMany(Notification::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }
    public function user_withdraw()
    {
        return $this->hasMany(UserWithdraw::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }
    public function user_bank()
    {
        return $this->hasOne(UserBank::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }
    public function user_address()
    {
        return $this->hasMany(UserAddress::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }

    public function user_withdraw_point()
    {
        return $this->hasMany(UserWithdrawPoint::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }
}
