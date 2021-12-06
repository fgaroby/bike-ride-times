<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPathsTableAddColorForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paths', function (Blueprint $table) {
            $table->foreignId('color_id')
                  ->nullable()
                  ->after('to')
                  ->constrained('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paths', function (Blueprint $table) {
            $table->dropForeign(['color_id']);
        });

        Schema::table('paths', function (Blueprint $table) {
            $table->dropColumn('color_id');
        });
    }
}
