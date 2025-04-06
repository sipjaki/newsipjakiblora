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
        Schema::create('paketpekerjaanmasjakis', function (Blueprint $table) {
            $table->id();
            // ----------------------------------------------------------------
            $table->foreignId('detailsnamapaketpekerjaan_id')->nullable();
            $table->foreignId('detailspaketpekerjaan_id')->nullable();
            $table->foreignId('sppbj_id')->nullable();
            $table->foreignId('spk_id')->nullable();
            $table->foreignId('sskk_id')->nullable();
            $table->foreignId('suratperjanjianpekerjaan_id');
            // $table->foreignId('detailsnamapaketpekerjaan_id')->nullable()->constrained('detailsnamapaketpekerjaans')->cascadeOnDelete();
            // ----------------------------------------------------------------
            $table->foreignId('profiljenispekerjaan_id')->nullable();
            $table->foreignId('paketstatuspekerjaan_id')->nullable();
            $table->foreignId('sumberdana_id')->nullable();
            $table->foreignId('tahunpilihan_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('bulanrekap_id')->nullable();
            // ----------------------------------------------------------------
            $table->text('namapekerjaan')->nullable();
            $table->string('cvptpenyedia')->nullable();
            $table->string('nib')->nullable();
            $table->decimal('nilaikontrak', 15, 2)->nullable(); // Menggunakan tipe decimal untuk nilai kontrak
            $table->string('jeniskontrak')->nullable();
            $table->string('karakteristikkontrak')->nullable();
            $table->string('bulanmulai')->nullable(); // Menyimpan tanggal mulai
            $table->string('bulanselesai')->nullable(); // Menyimpan tanggal selesai
            $table->integer('progress')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paketpekerjaanmasjakis');
    }
};
