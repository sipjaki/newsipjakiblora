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
        Schema::create('jabatankerjas', function (Blueprint $table) {
            $table->id();
            $table->string('jabatankerja', 255)->nullable()->index();
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
        Schema::dropIfExists('jabatankerjas');
    }
};
