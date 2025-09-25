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

        Schema::create('dokumentasijakon', function (Blueprint $table) {
            $table->id();

            $table->string('judul');

            // Foto kegiatan 1 sampai 12 (manual, tanpa loop)
            $table->string('fotokegiatan1')->nullable();
            $table->string('fotokegiatan2')->nullable();
            $table->string('fotokegiatan3')->nullable();
            $table->string('fotokegiatan4')->nullable();
            $table->string('fotokegiatan5')->nullable();
            $table->string('fotokegiatan6')->nullable();
            $table->string('fotokegiatan7')->nullable();
            $table->string('fotokegiatan8')->nullable();
            $table->string('fotokegiatan9')->nullable();
            $table->string('fotokegiatan10')->nullable();
            $table->string('fotokegiatan11')->nullable();
            $table->string('fotokegiatan12')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentasijakon');
    }
};
