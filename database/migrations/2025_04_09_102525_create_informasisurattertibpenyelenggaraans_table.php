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
        Schema::create('informasisurattertibpenyelenggaraans', function (Blueprint $table) {
            $table->id();
            $table->text('namaproyekkonstruksi')->nullable()->index();
            $table->text('nilaiproyek')->nullable()->index();
            $table->text('nomorkontrak')->nullable()->index();
            $table->text('waktupelaksanaan')->nullable()->index();
            $table->text('penyediajasa')->nullable()->index();
            $table->text('satuanopd')->nullable()->index();
            $table->text('waktupengawasan')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasisurattertibpenyelenggaraans');
    }
};
