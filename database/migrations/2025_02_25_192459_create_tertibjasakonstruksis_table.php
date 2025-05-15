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
        Schema::create('tertibjasakonstruksis', function (Blueprint $table) {
            $table->id();
            // Kolom relasi
            $table->foreignId('penyediastatustertibjakon_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha1_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha2_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha3_id')->nullable()->index();
            $table->foreignId('surattertibjakonusaha4_id')->nullable()->index();
// -------------------------------------------------------------------------
            $table->string('nib', 50)->nullable()->index(); // Set panjang karakter yang lebih sesuai
            $table->string('namapekerjaan', 255)->nullable();
            $table->string('tahunpelaksanaan', 255)->nullable();
            $table->string('namabadanusaha', 255)->nullable();
            $table->string('pjbu', 100)->nullable();

            $table->softDeletes();
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tertibjasakonstruksis');
    }
};
