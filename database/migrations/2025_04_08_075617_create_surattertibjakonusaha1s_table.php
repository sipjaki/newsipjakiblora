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
        Schema::create('surattertibjakonusaha1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tertibjasakonstruksi_id')->nullable()->index();
            $table->string('namapaketpekerjaan')->nullable()->index();
            $table->string('jenisusaha')->nullable()->index();
            $table->string('kesesuaian')->nullable()->index();
            $table->string('sifatusaha')->nullable()->index();
            $table->string('kesesuaiansbu')->nullable()->index();
            $table->string('subklasifikasi')->nullable()->index();
            $table->string('kesesuaianklasifikasi')->nullable()->index();
            $table->string('layananusaha')->nullable()->index();
            $table->string('kesesuaianlayananusaha')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonusaha1s');
    }
};
