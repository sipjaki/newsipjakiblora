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
        Schema::create('uijks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('kategori_perusahaan');
            $table->string('klasifikasi_bidang_usaha');
            $table->string('sub_klasifikasi_bidang_usaha');
            $table->string('keterangan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uijks');
    }
};
