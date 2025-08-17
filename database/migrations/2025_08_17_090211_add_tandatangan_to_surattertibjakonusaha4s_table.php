<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('surattertibjakonusaha4s', function (Blueprint $table) {
            $table->foreignId('tandatangan1_id')->nullable()->index()->after('status');
            $table->foreignId('tandatangan2_id')->nullable()->index()->after('tandatangan1_id');
            $table->foreignId('tandatangan3_id')->nullable()->index()->after('tandatangan2_id');

            $table->string('cadangan1')->nullable()->after('tandatangan3_id');
            $table->string('cadangan2')->nullable()->after('cadangan1');
            $table->string('cadangan3')->nullable()->after('cadangan2');
            $table->string('cadangan4')->nullable()->after('cadangan3');
        });
    }

    public function down()
    {
        Schema::table('surattertibjakonusaha4s', function (Blueprint $table) {
            $table->dropColumn([
                'tandatangan1_id',
                'tandatangan2_id',
                'tandatangan3_id',
                'cadangan1',
                'cadangan2',
                'cadangan3',
                'cadangan4'
            ]);
        });
    }
};
