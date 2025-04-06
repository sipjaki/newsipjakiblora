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
        Schema::create('bujkkontraktors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bujkkontraktorsub_id')->nullable()->index();
            $table->foreignId('asosiasimasjaki_id')->nullable()->index();
            $table->string('namalengkap', 255)->nullable()->index();
            $table->text('alamat')->nullable();
            $table->string('no_telepon', 20)->nullable()->index();
            $table->string('email', 255)->nullable()->index();
            $table->string('nomorindukberusaha', 255)->nullable()->index();
            $table->string('pju', 255)->nullable();
            $table->string('no_akte', 255)->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nama_notaris', 255)->nullable();
            $table->string('no_pengesahan', 255)->nullable();

            $table->fullText(['alamat']);
            $table->softDeletes();
            $table->timestamps();
            $table->index('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bujkkontraktors');
    }
};
