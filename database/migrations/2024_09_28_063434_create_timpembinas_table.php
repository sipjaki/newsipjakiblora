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
        Schema::create('timpembinas', function (Blueprint $table) {
            $table->id();
            $table->string('jabatandalamkedinasan');
            $table->string('nama_lengkap');
            // $table->string('jabatan');
            $table->string('email');
            // $table->string('alamatkantor');
            $table->string('telepon');
            $table->string('fototimpembina');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timpembinas');
    }
};
