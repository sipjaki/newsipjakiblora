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
        Schema::create('detailspaketpekerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatanlora_id')->nullable();
            $table->foreignId('tahunpilihan_id')->nullable();
            $table->foreignId('sumberdana_id')->nullable();
            // --------------------------------------------
            $table->string('paket')->nullable();
            $table->string('nopenetapan')->nullable();
            $table->date('tanggalpenetapan')->nullable();
            $table->date('tanggalsppj')->nullable();
            $table->string('nosppbj')->nullable();
            $table->string('nobahp')->nullable();
            $table->string('nonotadinas')->nullable();
            $table->date('tanggalnotadinas')->nullable();
            $table->string('nomorkontrak')->nullable();
            $table->string('harikontrak')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('bulan')->nullable();
            $table->date('tanggalawal')->nullable();
            $table->date('tanggalakhir')->nullable();
            $table->date('tanggalakhirpemeliharaan')->nullable();
            $table->string('namadirektur')->nullable();
            $table->string('waktukontrak')->nullable();
            $table->string('terbilangwaktukontrak')->nullable();
            $table->string('waktupemeliharaan')->nullable();
            $table->string('terbilangpemeliharaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('uangmuka')->nullable();
            $table->string('terbilang')->nullable();
            $table->string('penyedia')->nullable();
            $table->text('alamatcvpt')->nullable();
            $table->string('emailcvpt')->nullable();
            $table->string('website')->nullable();
            $table->string('notelepon')->nullable();
            $table->string('notaris')->nullable();
            $table->date('tanggalnotaris')->nullable();
            $table->string('kotanotaris')->nullable();
            $table->string('notarisperubahan')->nullable();
            $table->string('nomornotaris')->nullable();
            $table->date('tanggalnotaris')->nullable();
            $table->string('kodenotarisperubahan')->nullable();
            $table->string('nilaikontrak')->nullable();
            $table->string('terbilangnilaikontrak')->nullable();
            $table->string('nilaiuangmuka')->nullable();
            $table->string('dana')->nullable();
            $table->year('tahunanggaran')->nullable();
            $table->string('nospmk')->nullable();
            $table->string('tanggalspmk')->nullable();
            $table->string('harispmk')->nullable();
            $table->string('terbitspmk')->nullable();
            $table->string('nospl')->nullable();
            $table->string('nodpa')->nullable();
            $table->string('tanggaldpa')->nullable();
            $table->string('rekening')->nullable();
            $table->string('namabank')->nullable();
            $table->string('bank')->nullable();
            $table->string('konsultanpengawas')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailspaketpekerjaans');
    }
};
