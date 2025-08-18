<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan1s', function (Blueprint $table) {
            // Tambah foreignId sebelum lingkuppengawasan
            $table->foreignId('tertibjakonpenyelenggaraan_id')
                  ->nullable()
                  ->after('id');

            // Tambah cadangan1 - cadangan6 setelah catatan2
            $table->text('cadangan1')->nullable()->after('catatan2');
            $table->text('cadangan2')->nullable()->after('cadangan1');
            $table->text('cadangan3')->nullable()->after('cadangan2');
            $table->text('cadangan4')->nullable()->after('cadangan3');
            $table->text('cadangan5')->nullable()->after('cadangan4');
            $table->text('cadangan6')->nullable()->after('cadangan5');
        });
    }

    public function down(): void
    {
        Schema::table('surattertibjakonpenyelenggaraan1s', function (Blueprint $table) {
            $table->dropColumn([
                'tertibjakonpenyelenggaraan_id',
                'cadangan1',
                'cadangan2',
                'cadangan3',
                'cadangan4',
                'cadangan5',
                'cadangan6',
            ]);
        });
    }
};

