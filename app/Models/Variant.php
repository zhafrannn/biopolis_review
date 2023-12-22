<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user_payment_variant()
    {
        return $this->belongsTo(UserPayment::class, "variant_id"); // Sesuaikan dengan model Biodata Anda
    }
}
