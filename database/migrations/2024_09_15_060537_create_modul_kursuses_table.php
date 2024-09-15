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
        Schema::create('ModulKursus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kursus')->constrained('Kursus')->cascadeOnDelete();
            $table->string('modul');
            $table->string('submodul');
            $table->string('filemodul');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ModulKursus');
    }
};
