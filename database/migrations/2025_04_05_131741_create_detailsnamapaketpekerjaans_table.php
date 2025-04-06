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
        Schema::create('detailsnamapaketpekerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatanblora_id')->nullable();
            $table->foreignId('sumberdana_id')->nullable();
            // ------------------------------------------------------
            $table->string('namapaket')->nullable();
            $table->string('nilaikontrak')->nullable();
            $table->string('tanggalkontrak')->nullable();
            $table->string('waktupelaksanaan')->nullable();
            $table->string('terbilanghari')->nullable();
            $table->string('tanggalmulai')->nullable();
            $table->string('konsultanpengawas')->nullable();
            $table->string('penyediajasa')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailsnamapaketpekerjaans');
    }
};
