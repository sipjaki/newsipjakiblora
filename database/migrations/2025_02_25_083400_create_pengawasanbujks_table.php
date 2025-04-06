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
        Schema::create('pengawasanbujks', function (Blueprint $table) {
            $table->id();
            $table->string('kodeproyek', 100)->nullable();
            $table->string('namaperusahaan', 255)->nullable();
            $table->text('alamatperusahaan')->nullable();  // Sudah tepat untuk alamat
            $table->string('statusmodal', 50)->nullable();
            $table->string('jenisperusahaan', 100)->nullable();
            $table->string('nib', 100)->nullable();
            $table->string('kbli', 20)->nullable();
            $table->text('uraiankbli')->nullable();  // Sudah tepat untuk deskripsi panjang
            $table->string('sektor', 100)->nullable();
            $table->string('alamatproyek', 255)->nullable();
            $table->string('wilayah', 100)->nullable();
            $table->decimal('luastanah', 10, 2)->nullable();
            $table->integer('tki_lakilaki')->default(0);
            $table->integer('tki_perempuan')->default(0);
            $table->integer('tka_lakilaki')->default(0);
            $table->integer('tka_perempuan')->default(0);
            $table->string('resiko', 50)->nullable();
            $table->string('sumberdata', 100)->nullable();
            $table->decimal('investasi', 15, 2)->nullable();
            $table->string('skalausahaperusahaan', 100)->nullable();
            $table->string('skalausahaproyek', 100)->nullable();
            $table->string('kewenangankoordinator', 100)->nullable();
            $table->string('kewenanganpengawas', 100)->nullable();
            $table->string('PSN', 100);
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
        Schema::dropIfExists('pengawasanbujks');
    }
};
