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
        Schema::create('penanggungjawabteknis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap'); // Nama lengkap
            $table->string('tempat'); // Tempat
            $table->string('nopjt'); // Nomor PJT, unique untuk memastikan tidak ada duplikat
            $table->text('sfesifikasi'); // Spesifikasi, perhatikan bahwa nama kolom ini adalah 'sfesifikasi', pastikan sesuai dengan yang diinginkan
            $table->date('tanggal_terbit'); // Tanggal terbit
            $table->date('masa_berlaku'); // Masa berlaku
            $table->softDeletes(); // Kolom untuk soft deletes
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penanggungjawabteknis');
    }
};
