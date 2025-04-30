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
        Schema::create('skktenagakerjabloras', function (Blueprint $table) {
                $table->id();
                $table->string('nama', 100)->nullable();
                $table->text('alamat')->nullable();
                $table->year('tahunlulus')->nullable();
                $table->year('tahunbimtek')->nullable();

                $table->foreignId('namasekolah_id')->nullable()->index();
                $table->foreignId('jenjangpendidikan_id')->nullable()->index();
                $table->foreignId('jurusan_id')->nullable()->index();
                $table->foreignId('jabatankerja_id')->nullable()->index();
                $table->foreignId('jenjang_id')->nullable()->index();
                $table->foreignId('asosiasimasjaki_id')->nullable()->index();
                $table->foreignId('lpspenerbit_id')->nullable()->index();

                $table->date('tanggalterbit')->nullable();
                $table->date('tanggalhabis')->nullable();
                $table->string('statusterbit', 255)->nullable();
                $table->string('sertifikat')->nullable();

                $table->softDeletes();  // Soft deletes
                $table->timestamps();

                $table->index('deleted_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skktenagakerjabloras');
    }
};
