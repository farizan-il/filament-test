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
        Schema::create('Kursus', function (Blueprint $table) {
            $table->id();
            $table->string('judulKursus');
            $table->string('subjudul');
            $table->string('deskripsi');
            $table->string('instruktur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Kursus');
    }
};
