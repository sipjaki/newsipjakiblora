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
        
            Schema::create('paketpekerjaans', function (Blueprint $table) {
                $table->id();
                $table->string('instansi'); // Menambahkan kolom INSTANSI
                $table->bigInteger('jumlah_pagu'); // Menambahkan kolom JUMLAH PAGU sebagai BIGINT
                $table->string('metode_pengadaan'); // Menambahkan kolom METODE PENGADAAN
                $table->string('pekerjaan'); // Menambahkan kolom PEKERJAAN
                $table->text('foto_pekerjaan')->nullable(); // Menambahkan kolom FOTO_PEKERJAAN, tipe data TEXT dan nullable
                $table->date('tanggal_mulai'); // Menambahkan kolom TANGGAL MULAI
                $table->date('tanggal_selesai'); // Menambahkan kolom TANGGAL SELESAI
                $table->decimal('progress_fisik', 5, 2)->default(0); // Menambahkan kolom PROGRESS FISIK, tipe data DECIMAL dengan 5 digit total dan 2 digit desimal, dengan nilai default 0
                $table->softDeletes(); // Kolom untuk soft deletes
                $table->timestamps(); // Kolom untuk created_at dan updated_at
            });
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paketpekerjaans');
    }
};
