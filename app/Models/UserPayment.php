<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class, "user_id"); // Sesuaikan dengan model Biodata Anda
    }
    public function product()
    {
        return $this->belongsTo(Product::class, "product_id"); // Sesuaikan dengan model Biodata Anda
    }
    public function user_payment_variant()
    {
        return $this->hasMany(UserPaymentVariant::class, "user_payment_id"); // Sesuaikan dengan model Biodata Anda
    }
}
