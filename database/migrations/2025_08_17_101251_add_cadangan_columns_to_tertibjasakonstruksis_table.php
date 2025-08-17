<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tertibjasakonstruksis', function (Blueprint $table) {
            $table->string('cadangan1', 255)->nullable()->after('pjbu');
            $table->string('cadangan2', 255)->nullable()->after('cadangan1');
            $table->string('cadangan3', 255)->nullable()->after('cadangan2');
            $table->string('cadangan4', 255)->nullable()->after('cadangan3');
            $table->string('cadangan5', 255)->nullable()->after('cadangan4');
        });
    }

    public function down()
    {
        Schema::table('tertibjasakonstruksis', function (Blueprint $table) {
            $table->dropColumn(['cadangan1', 'cadangan2', 'cadangan3', 'cadangan4', 'cadangan5']);
        });
    }
};
