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
        Schema::create('surattertibjakonpenyelenggaraan1s', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('tertibjakonpenyelenggaraan_id')->nullable()->index();
            $table->text('lingkuppengawasan')->nullable()->index();
            $table->text('indikator')->nullable()->index();
            $table->text('dokumenperiksa')->nullable()->index();
            $table->text('carapemerksaan1')->nullable()->index();
            $table->text('carapemerksaan2')->nullable()->index();
            $table->text('kesimpulan1')->nullable()->index();
            $table->text('kesimpulan2')->nullable()->index();
            $table->text('catatan1')->nullable()->index();
            $table->text('catatan2')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonpenyelenggaraan1s');
    }
};
