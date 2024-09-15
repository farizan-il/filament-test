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
        Schema::create('Transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('User')->cascadeOnDelete();
            $table->foreignId('payment_id')->constrained('Payments')->cascadeOnDelete();
            $table->string('namaPelanggan');
            $table->string('emailPelanggan');
            $table->foreignId('kursus_id')->constrained('Kursus')->cascadeOnDelete();
            $table->string('namaKursus');
            $table->string('kategoriKursus');
            $table->string('harga');
            $table->string('buktiTransaksi');
            $table->enum('statustransaki', ['proses', 'lunas', 'batal'])->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transactions');
    }
};
