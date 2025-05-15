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
        Schema::create('surattertibjakonusaha2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tertibjasakonstruksi_id')->nullable()->index();
            $table->foreignId('tandatangan1_id')->nullable()->index();
            $table->foreignId('tandatangan2_id')->nullable()->index();
            $table->foreignId('tandatangan3_id')->nullable()->index();
           $table->string('namabadanusaha')->nullable();
            $table->string('statusperizinan')->nullable();
            $table->string('nib')->nullable();
            $table->string('waktupengawasan')->nullable();
            $table->string('waktupengawasanselesai')->nullable();
            // -------------------------------------------------------------------------------------
            $table->string('namapaketpekerjaan')->nullable()->index();
            $table->string('bentuk')->nullable()->index();
            $table->string('kesesuaiansbu')->nullable()->index();
            $table->string('syaratkualifikasi')->nullable()->index();
            $table->string('sbu')->nullable()->index();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonusaha2s');
    }
};
