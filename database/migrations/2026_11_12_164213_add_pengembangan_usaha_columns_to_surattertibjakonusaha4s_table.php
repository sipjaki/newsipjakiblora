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
        Schema::table('surattertibjakonusaha4s', function (Blueprint $table) {

            // Kolom 'status' LAMA tidak diubah/dihapus.
            // Asumsi: inputan "hasil_sdm" akan disimpan ke kolom 'status' yang sudah ada ini.

            // 1. Sisa Inputan Hasil Pemeriksaan (11 kolom baru)
            // Dimulai dari hasil_peralatan sampai hasil_smkk
            $table->string('hasil_peralatan')->nullable()->after('status');
            $table->string('hasil_teknologi_software')->nullable()->after('hasil_peralatan');
            $table->string('hasil_teknologi_hardware')->nullable()->after('hasil_teknologi_software');
            $table->string('hasil_keuangan_opini')->nullable()->after('hasil_teknologi_hardware');
            $table->string('hasil_keuangan_standar')->nullable()->after('hasil_keuangan_opini');
            $table->string('hasil_gcg')->nullable()->after('hasil_keuangan_standar');
            $table->string('hasil_penghargaan')->nullable()->after('hasil_gcg');
            $table->string('hasil_rantai_pasok')->nullable()->after('hasil_penghargaan');
            $table->string('hasil_mutu_bahan')->nullable()->after('hasil_rantai_pasok');
            $table->string('hasil_mutu_peralatan')->nullable()->after('hasil_mutu_bahan');
            $table->string('hasil_smkk')->nullable()->after('hasil_mutu_peralatan');

            // 2. Inputan Catatan Pemeriksaan (12 kolom baru)
            $table->text('catatan_sdm')->nullable()->after('hasil_smkk');
            $table->text('catatan_peralatan')->nullable()->after('catatan_sdm');
            $table->text('catatan_teknologi_software')->nullable()->after('catatan_peralatan');
            $table->text('catatan_teknologi_hardware')->nullable()->after('catatan_teknologi_software');
            $table->text('catatan_keuangan_opini')->nullable()->after('catatan_teknologi_hardware');
            $table->text('catatan_keuangan_standar')->nullable()->after('catatan_keuangan_opini');
            $table->text('catatan_gcg')->nullable()->after('catatan_keuangan_standar');
            $table->text('catatan_penghargaan')->nullable()->after('catatan_gcg');
            $table->text('catatan_rantai_pasok')->nullable()->after('catatan_penghargaan');
            $table->text('catatan_mutu_bahan')->nullable()->after('catatan_rantai_pasok');
            $table->text('catatan_mutu_peralatan')->nullable()->after('catatan_mutu_bahan');
            $table->text('catatan_smkk')->nullable()->after('catatan_mutu_peralatan');

            // 3. 2 Kolom Tambahan (Total jadi 25 kolom baru)
            // Sesuai permintaan: "2 di adakan tapi tidak digunakan biar ga pusing"
            $table->string('cadangan_5')->nullable()->after('catatan_smkk');
            $table->string('cadangan_6')->nullable()->after('cadangan_5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surattertibjakonusaha4s', function (Blueprint $table) {
            // Hapus 25 kolom baru jika di-rollback
            $table->dropColumn([
                'hasil_peralatan', 'hasil_teknologi_software', 'hasil_teknologi_hardware',
                'hasil_keuangan_opini', 'hasil_keuangan_standar', 'hasil_gcg', 'hasil_penghargaan',
                'hasil_rantai_pasok', 'hasil_mutu_bahan', 'hasil_mutu_peralatan', 'hasil_smkk',

                'catatan_sdm', 'catatan_peralatan', 'catatan_teknologi_software', 'catatan_teknologi_hardware',
                'catatan_keuangan_opini', 'catatan_keuangan_standar', 'catatan_gcg', 'catatan_penghargaan',
                'catatan_rantai_pasok', 'catatan_mutu_bahan', 'catatan_mutu_peralatan', 'catatan_smkk',

                'cadangan_5', 'cadangan_6'
            ]);
        });
    }
};
