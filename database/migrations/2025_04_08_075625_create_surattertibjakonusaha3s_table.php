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
        Schema::create('surattertibjakonusaha3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tertibjasakonstruksi_id')->nullable()->index();
            $table->foreignId('tandatangan1_id')->nullable()->index();
            $table->foreignId('tandatangan2_id')->nullable()->index();
            $table->foreignId('tandatangan3_id')->nullable()->index();
           $table->string('namabadanusaha')->nullable();
            $table->string('waktupengawasan')->nullable();
            $table->string('waktupengawasanselesai')->nullable();
            // -------------------------------------------------------------------------------------

            $table->string('namabujk')->nullable()->index();
            $table->string('nib')->nullable()->index();
            $table->string('pjbu')->nullable()->index();
            $table->string('jenisusaha')->nullable()->index();
            $table->foreignId('subklasifikasi_id')->nullable()->index();
            $table->string('nomorsertifikat')->nullable()->index();
            $table->string('kesimpulan')->nullable()->index();
            $table->string('catatanpemeriksaan')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonusaha3s');
    }
};
