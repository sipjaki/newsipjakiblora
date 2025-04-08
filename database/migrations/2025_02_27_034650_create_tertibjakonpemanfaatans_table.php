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
        Schema::create('tertibjakonpemanfaatans', function (Blueprint $table) {
            $table->id();
            $table->string('penyedia')->nullable()->index();
            $table->foreignId('penyediastatustertibjakon_id')->nullable()->index();
            $table->foreignId('surattertibjakonpemanfaatan1_id')->nullable()->index();
            $table->foreignId('surattertibjakonpemanfaatan2_id')->nullable()->index();
            $table->foreignId('surattertibjakonpemanfaatan3_id')->nullable()->index();
            $table->foreignId('surattertibjakonpemanfaatan4_id')->nullable()->index();
            $table->string('namapekerjaan')->nullable()->index();
            $table->string('namabangunan')->nullable()->index();
            $table->string('nomorkontrak')->nullable()->index();
            $table->string('lokasi')->nullable()->index();
            $table->date('tanggalpembangunan')->nullable()->index();
            $table->date('tanggalpemanfaatan')->nullable()->index();
            $table->integer('umurkonstruksi')->nullable()->index();
            $table->string('peruntukan_fungsi')->nullable()->index();
            $table->string('peruntukan_lokasi')->nullable()->index();
            $table->string('rencanaumur')->nullable()->index();
            $table->string('kapasitasdanbeban')->nullable()->index();
            $table->string('pemeliharaan_konstruksi')->nullable()->index();
            $table->string('pemeliharaan_struktur')->nullable()->index(); // Diperbaiki dari pemeliharaan_pemeliharaan
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tertibjakonpemanfaatans');
    }
};
