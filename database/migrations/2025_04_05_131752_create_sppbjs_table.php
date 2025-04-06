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
        Schema::create('sppbjs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nomor')->nullable();
            $table->date('koptanggal')->nullable();
            $table->string('lampiran')->nullable();
            $table->string('kepadayth')->nullable();
            $table->string('alamatdi')->nullable();
            $table->string('perihal1')->nullable();
            $table->string('nomorkontrak')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('perihalnomor')->nullable();
            $table->string('penawaran')->nullable();
            $table->string('hargaterkoreksi')->nullable();
            $table->string('hargaterbilang')->nullable();
            $table->string('dp')->nullable();
            $table->string('terbilang')->nullable();
            $table->string('berlaku')->nullable();
            $table->string('terbilangberlaku')->nullable();
            $table->string('kegiatansatuan')->nullable();
            $table->string('namalengkap')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('nip')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppbjs');
    }
};
