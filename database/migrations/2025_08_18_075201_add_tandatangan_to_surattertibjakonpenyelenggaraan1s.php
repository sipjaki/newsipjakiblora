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
    Schema::table('surattertibjakonpenyelenggaraan1s', function (Blueprint $table) {
        $table->foreignId('tandatangan1_id')->nullable()->index()->after('cadangan6');
        $table->foreignId('tandatangan2_id')->nullable()->index()->after('tandatangan1_id');
        $table->foreignId('tandatangan3_id')->nullable()->index()->after('tandatangan2_id');
    });
}

public function down(): void
{
    Schema::table('surattertibjakonpenyelenggaraan1s', function (Blueprint $table) {
        $table->dropColumn([
            'tandatangan1_id',
            'tandatangan2_id',
            'tandatangan3_id',
        ]);
    });
}

};
