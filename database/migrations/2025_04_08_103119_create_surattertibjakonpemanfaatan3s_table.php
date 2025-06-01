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
        Schema::create('surattertibjakonpemanfaatan3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tertibjakonpemanfaatan_id')->nullable()->index();
            $table->text('lingkuppengawasan')->nullable()->index();
            $table->text('indikator')->nullable()->index();
            $table->text('kesimpulanpemeriksaan')->nullable()->index();
            $table->text('catatan')->nullable()->index();
            $table->text('dokumendiperiksa')->nullable()->index();
            $table->text('carapemeriksaan')->nullable()->index();
                      $table->softDeletes();
                      $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surattertibjakonpemanfaatan3s');
    }
};
