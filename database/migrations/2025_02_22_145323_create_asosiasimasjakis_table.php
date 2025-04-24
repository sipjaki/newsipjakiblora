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
        Schema::create('asosiasimasjakis', function (Blueprint $table) {
            $table->id();
            $table->string('namaasosiasi')->nullable()->index();
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
        Schema::dropIfExists('asosiasimasjakis');
    }
};
