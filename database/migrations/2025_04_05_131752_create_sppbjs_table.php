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

            $table->string('nomor')->nullable(); // ada
            $table->date('koptanggal')->nullable(); // ada
            $table->string('lampiran')->nullable(); // ada
            $table->string('kepadayth')->nullable(); // ada
            $table->string('alamatdi')->nullable(); // ada
            $table->string('perihal1')->nullable(); // ada
            $table->string('nomorkontrak')->nullable(); // ada
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
