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
        Schema::create('pengawasanketertiban', function (Blueprint $table) {
            $table->id(); // ID auto-increment, sebagai primary key
            $table->foreignId('pengawasanlokasi_id')->constrained()->onDelete('cascade'); // Lokasi
            $table->foreignId('pengawasanbangunangedung_id')->constrained()->onDelete('cascade'); // Bangunan Gedung
            $table->foreignId('penanggungjawabteknis_id')->constrained()->onDelete('cascade'); // PJT (Penanggung Jawab Teknis)
            $table->foreignId('pengawasanstatus_id')->constrained()->onDelete('cascade');
            $table->foreignId('pengawasantindakan_id')->constrained()->onDelete('cascade'); // Tindakan
            $table->text('judul'); // Judul laporan
            $table->date('tanggal_laporan'); // Tanggal laporan
            $table->text('keterangan'); // Keterangan   
            $table->softDeletes(); // Kolom untuk soft deletes
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawasanketertiban');
    }
};
