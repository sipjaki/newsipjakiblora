<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan3s', function (Blueprint $table) {
            $table->foreignId('tertibjakonpenyelenggaraan_id')
                  ->nullable()
                  ->after('id');

            $table->foreignId('tandatangan1_id')
                  ->nullable()
                  ->index()
                  ->after('catatan2'); // pastikan sesuai kolom terakhir

            $table->foreignId('tandatangan2_id')
                  ->nullable()
                  ->index()
                  ->after('tandatangan1_id');

            $table->foreignId('tandatangan3_id')
                  ->nullable()
                  ->index()
                  ->after('tandatangan2_id');
        });
    }

    public function down(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan3s', function (Blueprint $table) {
            $table->dropColumn([
                'tertibjakonpenyelenggaraan_id',
                'tandatangan1_id',
                'tandatangan2_id',
                'tandatangan3_id'
            ]);
        });
    }
};
