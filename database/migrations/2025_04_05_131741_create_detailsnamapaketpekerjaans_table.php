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
        Schema::create('detailsnamapaketpekerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatanblora_id')->nullable()->constrained('kecamatanbloras')->onDelete('set null');
            $table->foreignId('sumberdana_id')->nullable()->constrained('sumberdanas')->onDelete('set null');
            // ------------------------------------------------------
            // Columns for the table
            $table->string('namapaket')->nullable();
            $table->string('nilaikontrak')->nullable();
            $table->date('tanggalkontrak')->nullable();
            $table->date('waktupelaksanaan')->nullable();
            $table->string('terbilanghari')->nullable();
            $table->date('tanggalmulai')->nullable();
            $table->string('konsultanpengawas')->nullable();
            $table->string('penyediajasa')->nullable();
            // Soft deletes (optional)
            $table->softDeletes();

            // Timestamps (created_at and updated_at)
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailsnamapaketpekerjaans');
    }
};
