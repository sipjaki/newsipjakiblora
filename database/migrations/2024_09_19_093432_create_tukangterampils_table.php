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
        Schema::create('tukangterampils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('pengawasanlokasi_id');
            $table->foreignId('keterampilanpekerja_id');
            $table->foreignId('tahunpilihan_id');
            $table->string('desa');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('nik');
            $table->string('kualifikasi');
            $table->string('registrasi');
            // ------------------------------------------
            $table->string('foto');
            $table->string('kta_gatensi');
            $table->string('skk_pekerja');
            $table->string('foto_kegiatanpekerja1');
            $table->string('foto_kegiatanpekerja2');
            // $table->integer('usia');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tukangterampils');
    }
};
