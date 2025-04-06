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
        Schema::create('sskks', function (Blueprint $table) {
            $table->id();
            $table->string('nama1', 100)->nullable();
            $table->text('alamat1')->nullable();
            $table->string('telepon1', 15)->nullable();
            $table->string('website1', 100)->nullable();
            $table->string('email1', 100)->nullable();
            $table->string('nama2', 100)->nullable();
            $table->text('alamat2')->nullable();
            $table->string('telepon2', 15)->nullable();
            $table->string('website2', 100)->nullable();
            $table->string('email2', 100)->nullable();
            $table->string('pelaksanaan1', 100)->nullable();
            $table->string('haripelaksanaan1')->nullable();
            $table->string('pelaksanaan2', 100)->nullable();
            $table->string('haripelaksanaan2')->nullable();
            $table->string('pelaksanaan3', 100)->nullable();
            $table->string('haripelaksanaan3')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sskks');
    }
};
