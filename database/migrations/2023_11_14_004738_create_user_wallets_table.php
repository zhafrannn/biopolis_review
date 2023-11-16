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
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->bigInteger('current_point')->default(0);
            $table->bigInteger('current_balance')->default(0);
            $table->bigInteger('total_point')->default(0);
            $table->bigInteger('total_refferal')->default(0);
            $table->bigInteger('total_balance')->default(0);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_wallets');
    }
};
