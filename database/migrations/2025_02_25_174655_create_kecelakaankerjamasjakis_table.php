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
        Schema::create('kecelakaankerjamasjakis', function (Blueprint $table) {
            $table->id();
            $table->string('namapaketpekerjaan', 255)->nullable();
            $table->year('tahun')->nullable();
            $table->string('namaperusahaan', 255)->nullable();
            $table->string('namatenagakerja', 255)->nullable();
            $table->string('lokasikecelakaan', 255)->nullable();
            $table->dateTime('waktukecelakaan')->nullable();
            $table->text('keterangan')->nullable();
            $table->decimal('nilaikerugian', 15, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index('deleted_at');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecelakaankerjamasjakis');
    }
};
