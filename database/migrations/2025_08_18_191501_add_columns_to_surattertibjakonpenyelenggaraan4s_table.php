<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan4s', function (Blueprint $table) {
            // Kolom baru setelah id
            $table->foreignId('tertibjakonpenyelenggaraan_id')
                  ->nullable()
                  ->after('id');

            // Kolom baru setelah catatan2
            $table->foreignId('tandatangan1_id')
                  ->nullable()
                  ->index()
                  ->after('catatan2');

            $table->foreignId('tandatangan2_id')
                  ->nullable()
                  ->index()
                  ->after('tandatangan1_id');

            $table->foreignId('tandatangan3_id')
                  ->nullable()
                  ->index()
                  ->after('tandatangan2_id');

            // Tambahan catatan3 & catatan4
            $table->text('catatan3')->nullable()->after('catatan2')->index();
            $table->text('catatan4')->nullable()->after('catatan3')->index();
        });
    }

    public function down(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan4s', function (Blueprint $table) {
            $table->dropColumn([
                'tertibjakonpenyelenggaraan_id',
                'tandatangan1_id',
                'tandatangan2_id',
                'tandatangan3_id',
                'catatan3',
                'catatan4',
            ]);
        });
    }
};
