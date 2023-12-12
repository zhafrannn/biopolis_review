<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaymentVariant extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user_payment()
    {
        return $this->belongsTo(UserPayment::class, "user_payment_id"); // Sesuaikan dengan model Biodata Anda
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class, "variant_id"); // Sesuaikan dengan model Biodata Anda
    }
}
