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
        Schema::create('beritaagendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengawasanlokasi_id');
            $table->foreignId('user_id');
            $table->foreignId('agendastatus_id');
            $table->text('nama_agenda');
            $table->text('keterangan');
            $table->integer('kuota');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritaagendas');
    }
};
