<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user_payment()
    {
        return $this->hasMany(UserPayment::class, "product_id"); // Sesuaikan dengan model Biodata Anda
    }
}
