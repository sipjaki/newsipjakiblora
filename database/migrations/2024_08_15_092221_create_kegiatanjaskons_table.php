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
        Schema::create('kegiatanjaskons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laporankegiatan_id');
            $table->foreignId('user_id');            
            $table->text('judul_kegiatan');
            $table->text('alamat_kegiatan');
            $table->string('berita1');
            $table->string('berita2');
            $table->string('berita3');
            $table->string('berita4');
            $table->string('berita5');
            $table->string('berita6');
            $table->string('berita7');
            $table->string('berita8');
            $table->string('berita9');
            $table->string('berita10');
            $table->string('berita11');
            $table->string('berita12');
            $table->string('berita13');
            $table->string('berita14');
            $table->string('berita15');
            $table->string('berita16');
            $table->string('berita17');
            $table->string('berita18');
            $table->string('berita19');
            $table->string('berita20');
            $table->date('tanggal'); 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatanjaskons');
    }
};
