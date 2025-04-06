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
        Schema::create('bujkkonsultans', function (Blueprint $table) {
                $table->id();
                $table->foreignId('bujkkonsultansub_id')->nullable()->index();
                $table->foreignId('asosiasimasjaki_id')->nullable()->index();
                $table->string('namalengkap', 255)->nullable();
                $table->text('alamat')->nullable();
                $table->string('no_telepon', 20)->nullable();
                $table->string('email', 255)->nullable();
                $table->string('nomorindukberusaha', 100)->nullable();
                $table->string('pju', 255)->nullable();
                $table->string('no_akte', 100)->nullable();
                $table->date('tanggal')->nullable();
                $table->string('nama_notaris', 255)->nullable();
                $table->string('no_pengesahan', 100)->nullable();
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
        Schema::dropIfExists('bujkkonsultans');
    }
};
