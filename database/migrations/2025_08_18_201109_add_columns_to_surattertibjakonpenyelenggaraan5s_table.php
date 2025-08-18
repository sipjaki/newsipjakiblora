<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan5s', function (Blueprint $table) {
            // Tambahkan setelah id
            $table->foreignId('tertibjakonpenyelenggaraan_id')
                  ->nullable()
                  ->after('id');

            // Tambahan catatan3 & catatan4 setelah catatan2
            $table->text('catatan3')->nullable()->index()->after('catatan2');
            $table->text('catatan4')->nullable()->index()->after('catatan3');

            // Tambahan tanda tangan setelah catatan4
            $table->foreignId('tandatangan1_id')->nullable()->index()->after('catatan4');
            $table->foreignId('tandatangan2_id')->nullable()->index()->after('tandatangan1_id');
            $table->foreignId('tandatangan3_id')->nullable()->index()->after('tandatangan2_id');
        });
    }

    public function down(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan5s', function (Blueprint $table) {
            $table->dropColumn([
                'tertibjakonpenyelenggaraan_id',
                'catatan3',
                'catatan4',
                'tandatangan1_id',
                'tandatangan2_id',
                'tandatangan3_id',
            ]);
        });
    }
};
