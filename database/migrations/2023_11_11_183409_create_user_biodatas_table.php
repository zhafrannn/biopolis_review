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
        Schema::create('user_biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nik');
            $table->string('no_whatsapp');
            $table->string('provinsi');
            $table->string('kota');
            $table->text('alamat_lengkap');
            $table->text('nama_bank');
            $table->string('no_rekening');
            $table->string('nama_rekening');
            $table->string('nama_kontak_darurat');
            $table->string('nomor_kontak_darurat');
            $table->string('referal_use');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_biodatas');
    }
};
