<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tertibjakonpenyelenggaraans', function (Blueprint $table) {
            $table->string('berkasdukung1')->nullable()->after('pengawasan_kecelakaankerja');
            $table->string('berkasdukung2')->nullable()->after('berkasdukung1');
            $table->string('berkasdukung3')->nullable()->after('berkasdukung2');
            $table->string('berkasdukung4')->nullable()->after('berkasdukung3');
            $table->string('berkasdukung5')->nullable()->after('berkasdukung4');
            $table->string('berkasdukung6')->nullable()->after('berkasdukung5');
            $table->string('berkasdukung7')->nullable()->after('berkasdukung6');
            $table->string('berkasdukung8')->nullable()->after('berkasdukung7');
            $table->string('berkasdukung9')->nullable()->after('berkasdukung8');
            $table->string('berkasdukung10')->nullable()->after('berkasdukung9');
            $table->string('berkasdukung11')->nullable()->after('berkasdukung10');
            $table->string('berkasdukung12')->nullable()->after('berkasdukung11');
            $table->string('berkasdukung13')->nullable()->after('berkasdukung12');
            $table->string('berkasdukung14')->nullable()->after('berkasdukung13');
        });
    }

    public function down(): void
    {
        Schema::table('tertibjakonpenyelenggaraans', function (Blueprint $table) {
            $table->dropColumn([
                'berkasdukung1',
                'berkasdukung2',
                'berkasdukung3',
                'berkasdukung4',
                'berkasdukung5',
                'berkasdukung6',
                'berkasdukung7',
                'berkasdukung8',
                'berkasdukung9',
                'berkasdukung10',
                'berkasdukung11',
                'berkasdukung12',
                'berkasdukung13',
                'berkasdukung14',
            ]);
        });
    }
};
