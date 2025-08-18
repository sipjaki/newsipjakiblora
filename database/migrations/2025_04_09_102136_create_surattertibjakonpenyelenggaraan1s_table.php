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

        Schema::create('surattertibjakonpenyelenggaraan1s', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('tertibjakonpenyelenggaraan_id')->nullable()->index();
            $table->text('lingkuppengawasan')->nullable()->index(); // Nilai Proyek
            $table->text('indikator')->nullable()->index(); // Nomor Kontrak
            $table->text('dokumenperiksa')->nullable()->index(); // Waktu Pelaksanaan
            $table->text('carapemerksaan1')->nullable()->index(); // Penyedia Jasa CV PT
            $table->text('carapemerksaan2')->nullable()->index(); // Nama Satuan OPD
            $table->text('kesimpulan1')->nullable()->index(); // Waktu Pengawasan awal
            $table->text('kesimpulan2')->nullable()->index(); // Waktu Pengawasan Akhir
            $table->text('catatan1')->nullable()->index();
            $table->text('catatan2')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonpenyelenggaraan1s');
    }
};
