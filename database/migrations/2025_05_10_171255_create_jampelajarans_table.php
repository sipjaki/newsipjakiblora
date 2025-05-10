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
        Schema::create('jampelajarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agendapelatihan_id')->nullable();
            $table->string('materi')->nullable();
            $table->string('narasumber')->nullable();
            $table->string('jampelajaran')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jampelajarans');
    }
};
