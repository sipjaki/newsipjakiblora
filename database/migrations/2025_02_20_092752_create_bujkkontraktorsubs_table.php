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
        Schema::create('bujkkontraktorsubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bujkkontraktor_id')->nullable()->index();
            $table->string('nama_pengurus', 255)->nullable()->index();
            $table->string('sub_klasifikasi_layanan', 255)->nullable();
            $table->string('kode', 255)->nullable()->index();
            $table->string('kualifikasi', 255)->nullable();
            $table->string('penerbit', 255)->nullable()->index();
            $table->date('tanggal_terbit')->nullable();
            $table->date('masa_berlaku')->nullable();
            $table->string('nama_psjk', 255)->nullable()->index();
            $table->string('sub_kualifikasi_bu', 255)->nullable();
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
        Schema::dropIfExists('bujkkontraktorsubs');
    }
};
