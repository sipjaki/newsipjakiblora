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
            $table->foreignId('profiljenispekerjaan_id')->nullable(); // ADA
            $table->foreignId('paketstatuspekerjaan_id')->nullable(); // ADA
            $table->foreignId('sumberdana_id')->nullable();  // ADA
            $table->foreignId('tahunpilihan_id')->nullable(); // ADA
            $table->foreignId('user_id')->nullable(); // ADA
            $table->foreignId('bulanrekap_id')->nullable(); // ADA
            // ----------------------------------------------------------------
            $table->text('namapekerjaan')->nullable(); // ADA
            $table->string('cvptpenyedia')->nullable(); // ADA
            $table->string('nib')->nullable(); // ADA
            $table->decimal('nilaikontrak', 15, 2)->nullable();  // ADA // Menggunakan tipe decimal untuk nilai kontrak
            $table->string('jeniskontrak')->nullable(); // ADA
            $table->string('karakteristikkontrak')->nullable(); // ADA
            $table->string('bulanmulai')->nullable(); // ADA // Menyimpan tanggal mulai
            $table->string('bulanselesai')->nullable();  // ADA // Menyimpan tanggal selesai
            $table->integer('progress')->default(0); // ADA
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
