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
        Schema::create('giskbbs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kecamatan');
            $table->string('gambar');
            $table->string('laki_laki');
            $table->string('perempuan');
            // $table->string('gambar');
            $table->text('keterangan_gis');
            // $table->date('tanggal');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giskbbs');
    }
};
