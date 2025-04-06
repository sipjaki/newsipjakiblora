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
             // surat pertama
             $table->foreignId('kecamatanblora_id')->nullable();
             $table->foreignId('sumberdana_id')->nullable();
             $table->foreignId('tahunpilihan_id')->nullable();

        $table->text('alamatdinas')->nullable();
        $table->string('satuankerja')->nullable();
        $table->string('nomorspk')->nullable();
        $table->date('tanggalspk')->nullable();
        $table->string('namalengkapspk')->nullable();
        $table->string('nipspk')->nullable();
        $table->string('spkppk')->nullable();
        $table->string('berkedudukanspk')->nullable();
        $table->string('spkpemerintah')->nullable();
        $table->string('spkkeputusan')->nullable();
        $table->string('spknomorkeputusan')->nullable();
        $table->date('spktanggalkeputusan')->nullable();
        $table->date('spktanggalppk')->nullable();
        $table->year('tahunanggaran1')->nullable();
        $table->string('namapenyedia')->nullable();
        $table->string('jabatanpenyedia')->nullable();
        $table->string('berkedudukanpenyedia')->nullable();
        $table->string('nomorpenyedia')->nullable();
        $table->date('tanggalpenyedia')->nullable();
        $table->string('notarispenyedia')->nullable();
        $table->string('atasnamapenyedia')->nullable();
        $table->string('ppk1')->nullable();
        $table->string('ppk2')->nullable();
        $table->string('spkuntukpenyediappk2')->nullable();

        // surat kedua
        $table->string('paketpekerjaan1')->nullable();
        $table->string('nomorpaketpekerjaan')->nullable();
        $table->string('hasilpaketpekerjaan')->nullable();
        $table->string('bapekerjaan')->nullable();
        $table->string('penetapanpemenangpekerjaan')->nullable();
        $table->string('nomordpa')->nullable();
        $table->year('anggaran')->nullable();
        $table->string('waktupelaksanaan')->nullable();
        $table->string('terbilangpelaksanaan')->nullable();
        $table->string('waktupemeliharaan')->nullable();
        $table->string('terbilangpemeliharaan')->nullable();
        $table->string('hargakontrak')->nullable();
        $table->string('hargaterbilang')->nullable();

        // surat ketiga
        $table->string('ruanglingkup')->nullable();
        $table->string('bank')->nullable();
        $table->string('rekening')->nullable();
        $table->string('atasnamabank')->nullable();
        $table->string('dp')->nullable();
        $table->string('terbilang')->nullable();
        $table->string('namaselaku1')->nullable();
        $table->string('namappk1')->nullable();
        $table->string('nip1')->nullable();
        $table->string('namajabatan1')->nullable();
        $table->string('namamenyetujui1')->nullable();

        // surat keempat
        $table->string('nomorspmk')->nullable();
        $table->string('paketpekerjaanspmk')->nullable();
        $table->string('namaspmk')->nullable();
        $table->string('alamatspmk')->nullable();
        $table->date('tanggalspmk')->nullable();
        $table->string('namaspmkpenujukan')->nullable();
        $table->string('alamatspmkpenunjukan')->nullable();
        $table->date('tanggalmulaispmk')->nullable();
        $table->string('waktuspmk')->nullable();
        $table->string('jumlahhari')->nullable();
        $table->string('waktupemeliharaan')->nullable();
        $table->string('terbilangpemeliharaan')->nullable();
        $table->date('tanggalsurat1')->nullable();
        $table->string('namaselaku2')->nullable();
        $table->string('namappk2')->nullable();
        $table->string('nip2')->nullable();
        $table->string('namajabatan2')->nullable();
        $table->string('namamenyetujui2')->nullable();

        // SURAT KELIMA
        $table->string('nomorlokasikerja')->nullable();
        $table->string('kerjahari')->nullable();
        $table->string('kerjatanggal')->nullable();
        $table->string('kerjabulan')->nullable();
        $table->string('kerjatahun')->nullable();
        $table->string('kerjakepala')->nullable();
        $table->string('kerjapaketpekerjaan')->nullable();
        $table->year('tahunpilihan')->nullable();
        $table->string('kerjanama')->nullable();
        $table->string('kerjajabatan')->nullable();
        $table->string('kerjaalamat')->nullable();
        $table->string('kerjafisik')->nullable();
        $table->string('tahunpilihan_id')->nullable();
        $table->string('kerjapaket')->nullable();
        $table->string('kerjanomor')->nullable();
        $table->string('kerjatanggal')->nullable();
        $table->string('kerjakecamatan')->nullable();
        $table->date('tanggalsurat2')->nullable();
        $table->string('namaselaku3')->nullable();
        $table->string('namappk3')->nullable();
        $table->string('nip3')->nullable();
        $table->string('namajabatan3')->nullable();
        $table->string('namamenyetujui3')->nullable();

        // COVER
        $table->string('nomorspkcover')->nullable();
        $table->date('tanggalspkcover')->nullable();
        $table->string('paketpekerjaancover')->nullable();
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
