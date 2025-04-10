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
            $table->text('lingkuppengawasan')->nullable()->index();
            $table->text('indikator1')->nullable()->index();
            $table->text('indikator2')->nullable()->index();
            $table->text('indikator3')->nullable()->index();
            $table->text('indikator4')->nullable()->index();
            $table->text('indikator5')->nullable()->index();
            $table->text('indikator6')->nullable()->index();
            $table->text('indikator7')->nullable()->index();
            $table->text('dokumenperiksa')->nullable()->index();
            $table->text('carapemerksaan1')->nullable()->index();
            $table->text('carapemerksaan2')->nullable()->index();
            $table->text('carapemerksaan3')->nullable()->index();
            $table->text('carapemerksaan4')->nullable()->index();
            $table->text('carapemerksaan5')->nullable()->index();
            $table->text('carapemerksaan6')->nullable()->index();
            $table->text('carapemerksaan7')->nullable()->index();
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
