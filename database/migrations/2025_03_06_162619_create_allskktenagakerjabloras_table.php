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
        Schema::create('allskktenagakerjabloras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jabatanskkanda_id')->nullable();
            $table->string('skkanda')->nullable();
            $table->foreignId('agendaskk_id')->nullable();
            $table->foreignId('user_id')->nullable(); // ada
            $table->foreignId('jenjangpendidikan_id')->nullable(); // ada
            $table->foreignId('jabatankerja_id')->nullable();
            $table->foreignId('namasekolah_id')->nullable();
            $table->foreignId('tahunpilihan_id')->nullable();
            $table->string('nik')->nullable(); // ada
                    // $table->string('namalengkap')->nullable();
                    $table->string('tempatlahir')->nullable();
                    $table->date('ttl')->nullable(); // ada
                    $table->string('jeniskelamin')->nullable(); // ada
                    $table->string('alamat')->nullable();
                    $table->string('notelepon')->nullable(); // ada
                    $table->string('email')->nullable();
                    $table->integer('tahunlulus')->nullable();

                    $table->string('uploadktp')->nullable();
                    $table->string('uploadfoto')->nullable();
                    $table->string('uploadijazah')->nullable();
                    $table->string('uploadpengalaman')->nullable();
                    $table->string('uploadkebenarandata')->nullable();
                    $table->string('uploadnpwp')->nullable();
                    $table->string('uploaddaftarriwayathidup')->nullable();

                    $table->string('namaasosiasi')->nullable();
                    $table->string('punyaskk')->nullable();
                    $table->string('punyasiki')->nullable();
                    $table->string('portalpupr')->nullable();
                    $table->string('siappatuh')->nullable();
                    $table->string('sertifikat')->nullable();
                    // $table->boolean('verifikasiktp')->default(false);
                    $table->string('verifikasipu')->nullable();
                    $table->boolean('verifikasilps')->default(false);
                    $table->boolean('verifikasihadirsertifikasi')->default(false);
                    $table->softDeletes();
                    $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allskktenagakerjabloras');
    }
};
