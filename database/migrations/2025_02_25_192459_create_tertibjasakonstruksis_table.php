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
        Schema::create('tertibjasakonstruksis', function (Blueprint $table) {
            $table->id();
            // Kolom relasi
            $table->foreignId('penyediastatustertibjakon_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha1_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha2_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha3_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha4_id')->nullable()->index();
// -------------------------------------------------------------------------
            $table->string('nib', 50)->nullable()->index(); // Set panjang karakter yang lebih sesuai
            $table->string('namapekerjaan', 255)->nullable()->index();
            $table->string('namabadanusaha', 255)->nullable()->index();
            $table->string('pjbu', 100)->nullable()->index();
            $table->string('sesuai_jenis', 100)->nullable()->index();
            $table->string('sesuai_sifat', 100)->nullable()->index();
            $table->string('sesuai_klasifikasi', 100)->nullable()->index();
            $table->string('sesuai_layanan', 100)->nullable()->index();
            $table->string('segmentasipasar_bentuk', 100)->nullable()->index();
            $table->string('segmentasipasar_kualifikasi', 100)->nullable()->index();
            $table->string('syarat_SBU', 100)->nullable()->index();
            $table->string('syarat_NIB', 100)->nullable()->index();
            $table->string('pelaksanaanpengembangan', 255)->nullable()->index();

            $table->softDeletes();
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tertibjasakonstruksis');
    }
};
