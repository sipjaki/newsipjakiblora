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
        Schema::create('surattertibjakonusaha4s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tertibjasakonstruksi_id')->nullable()->index();
            $table->string('namavarian')->nullable()->index();
            $table->string('subvarian')->nullable()->index();
            $table->string('merkproduk')->nullable()->index();
            $table->string('sertifikat')->nullable()->index();
            $table->string('sni')->nullable()->index();
            $table->string('simpk')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonusaha4s');
    }
};
