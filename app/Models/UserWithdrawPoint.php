<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWithdrawPoint extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }

    public function point_exchange()
    {
        return $this->belongsTo(PointExchange::class, "point_exchange_id"); // Sesuaikan dengan model Biodata Anda
    }
}
