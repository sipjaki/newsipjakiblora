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
        Schema::create('hsppaket9s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hspkonstruksiumum9_id')->nullable();
            $table->foreignId('hspdivisi_id')->nullable();
            $table->string('hsppaket9')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hsppaket9s');
    }
};
