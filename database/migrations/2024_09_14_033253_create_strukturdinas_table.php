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
        Schema::create('strukturdinas', function (Blueprint $table) {
            $table->id();
            $table->text('judul')->nullable();
            $table->string('peraturan', 255)->nullable();
            $table->text('keterangan')->nullable();
            $table->fullText(['judul', 'keterangan']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strukturdinas');
    }
};
