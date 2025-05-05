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
        Schema::create('agendaskks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materipelatihanskk_id')->nullable();
            $table->foreignId('allskktenagakerjablora_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('asosiasimasjaki_id')->nullable();

            // $table->foreignId('jenjang_id')->nullable();
            $table->string('namakegiatan')->nullable();
            $table->string('penutupan')->nullable();
            $table->string('waktupelaksanaan')->nullable();
            $table->integer('jumlahpeserta')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('keterangan')->nullable();
            $table->text('isiagenda')->nullable();
            $table->string('foto')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendaskks');
    }
};
