<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->string('payment_code');
            $table->bigInteger('total_payment');
            $table->date('date');
            $table->date('valid_until');
            $table->string('status');
            $table->string('redirect_url');
            $table->string('shipping_type')->default('on_send');
            $table->string('shipping_courier')->nullable();
            $table->string('shipping_status')->nullable();
            $table->string('shipping_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_payments');
    }
};
