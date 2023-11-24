<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointExchange extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function withdraw_point()
    {
        return $this->hasMany(UserWithdrawPoint::class, "point_exchange_id"); // Sesuaikan dengan model Biodata Anda
    }
}
