<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up(): void
     {
         Schema::create('spks', function (Blueprint $table) {
            $table->id();

            // Surat pertama
            $table->foreignId('kecamatanblora_id')->nullable();
            $table->foreignId('sumberdana_id')->nullable();
            $table->foreignId('tahunpilihan_id')->nullable();

            $table->text('alamatdinas')->nullable();
            $table->string('satuankerja', 100)->nullable();
            $table->string('nomorspk', 100)->nullable();
            $table->date('tanggalspk')->nullable();
            $table->string('namalengkapspk', 100)->nullable();
            $table->string('nipspk', 50)->nullable();
            $table->string('spkppk', 100)->nullable();
            $table->string('berkedudukanspk', 100)->nullable();
            $table->string('spkpemerintah', 100)->nullable();
            $table->string('spkkeputusan', 100)->nullable();
            $table->string('spknomorkeputusan', 100)->nullable();
            $table->date('spktanggalkeputusan')->nullable();
            $table->date('spktanggalppk')->nullable();
            $table->year('tahunanggaran1')->nullable();
            $table->string('namapenyedia', 100)->nullable();
            $table->string('jabatanpenyedia', 100)->nullable();
            $table->string('berkedudukanpenyedia', 100)->nullable();
            $table->string('nomorpenyedia', 100)->nullable();
            $table->date('tanggalpenyedia')->nullable();
            $table->string('notarispenyedia', 100)->nullable();
            $table->string('atasnamapenyedia', 100)->nullable();
            $table->string('ppk1', 100)->nullable();
            $table->string('ppk2', 100)->nullable();
            $table->string('spkuntukpenyediappk2', 100)->nullable();

            // Surat kedua
            $table->string('paketpekerjaan1', 100)->nullable();
            $table->string('nomorpaketpekerjaan', 100)->nullable();
            $table->string('hasilpaketpekerjaan', 100)->nullable();
            $table->string('bapekerjaan', 100)->nullable();
            $table->string('penetapanpemenangpekerjaan', 100)->nullable();
            $table->string('nomordpa', 100)->nullable();
            $table->year('anggaran')->nullable();
            $table->string('waktupelaksanaan', 100)->nullable();
            $table->string('terbilangpelaksanaan', 100)->nullable();
            $table->string('waktupemeliharaan', 100)->nullable();
            $table->string('terbilangpemeliharaan2', 100)->nullable();
            $table->string('hargakontrak', 100)->nullable();
            $table->string('hargaterbilang', 100)->nullable();

            // Surat ketiga
            $table->text('ruanglingkup')->nullable();
            $table->string('bank', 100)->nullable();
            $table->string('rekening', 100)->nullable();
            $table->string('atasnamabank', 100)->nullable();
            $table->string('dp', 100)->nullable();
            $table->string('terbilang', 100)->nullable();
            $table->string('namaselaku1', 100)->nullable();
            $table->string('namappk1', 100)->nullable();
            $table->string('nip1', 50)->nullable();
            $table->string('namajabatan1', 100)->nullable();
            $table->string('namamenyetujui1', 100)->nullable();

            // Surat keempat
            $table->string('nomorspmk', 100)->nullable();
            $table->string('paketpekerjaanspmk', 100)->nullable();
            $table->string('namaspmk', 100)->nullable();
            $table->string('alamatspmk', 100)->nullable();
            $table->date('tanggalspmk')->nullable();
            $table->string('namaspmkpenujukan', 100)->nullable();
            $table->string('alamatspmkpenunjukan', 100)->nullable();
            $table->date('tanggalmulaispmk')->nullable();
            $table->string('waktuspmk', 100)->nullable();
            $table->string('jumlahhari', 100)->nullable();
            $table->string('waktupemeliharaan2', 100)->nullable();
            $table->string('terbilangpemeliharaan', 100)->nullable();
            $table->date('tanggalsurat1')->nullable();
            $table->string('namaselaku2', 100)->nullable();
            $table->string('namappk2', 100)->nullable();
            $table->string('nip2', 50)->nullable();
            $table->string('namajabatan2', 100)->nullable();
            $table->string('namamenyetujui2', 100)->nullable();

            // Surat kelima
            $table->string('nomorlokasikerja', 100)->nullable();
            $table->string('kerjahari', 50)->nullable();
            $table->date('kerjatanggal')->nullable();
            $table->string('kerjabulan', 50)->nullable();
            $table->string('kerjatahun', 50)->nullable();
            $table->string('kerjakepala', 100)->nullable();
            $table->string('kerjapaketpekerjaan', 100)->nullable();
            $table->year('tahunpilihan')->nullable();
            $table->string('kerjanama', 100)->nullable();
            $table->string('kerjajabatan', 100)->nullable();
            $table->string('kerjaalamat', 100)->nullable();
            $table->string('kerjafisik', 100)->nullable();
            $table->string('kerjapaket', 100)->nullable();
            $table->string('kerjanomor', 100)->nullable();
            $table->date('kerjatanggal2')->nullable();
            $table->string('kerjakecamatan', 100)->nullable();
            $table->date('tanggalsurat2')->nullable();
            $table->string('namaselaku3', 100)->nullable();
            $table->string('namappk3', 100)->nullable();
            $table->string('nip3', 50)->nullable();
            $table->string('namajabatan3', 100)->nullable();
            $table->string('namamenyetujui3', 100)->nullable();

            // Cover
            $table->string('nomorspkcover', 100)->nullable();
            $table->date('tanggalspkcover')->nullable();
            $table->string('paketpekerjaancover', 100)->nullable();
            $table->year('tahunanggarancover')->nullable();

            $table->softDeletes();
            $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spks');
    }
};
