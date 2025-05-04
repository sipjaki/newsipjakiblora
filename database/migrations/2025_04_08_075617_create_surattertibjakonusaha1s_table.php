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
        Schema::create('surattertibjakonusaha1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tertibjasakonstruksi_id')->nullable()->index();
            $table->foreignId('tandatangan_id')->nullable()->index();
            $table->string('namabadanusaha')->nullable();
            $table->string('statusperizinan')->nullable();
            $table->string('nib')->nullable();
            $table->string('waktupengawasan')->nullable();
            $table->string('waktupengawasanselesai')->nullable();
// -----------------------------------------------
            $table->string('namapaketpekerjaan')->nullable();
            $table->string('jenisusaha')->nullable();
            $table->string('kesesuaian')->nullable();
            $table->string('sifatusaha')->nullable();
            $table->string('kesesuaiansbu')->nullable();
            $table->foreignId('subklasifikasi_id')->nullable()->index();
            $table->string('kesesuaianklasifikasi')->nullable();
            $table->string('layananusaha')->nullable();
            $table->string('kesesuaianlayananusaha')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonusaha1s');
    }
};
