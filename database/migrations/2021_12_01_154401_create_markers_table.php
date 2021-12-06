<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('latitude', 8, 5);
            $table->float('longitude', 8, 5);
            $table->foreignId('map_id')->constrained('maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('markers', function (Blueprint $table) {
            $table->dropForeign(['map_id']);
        });

        Schema::dropIfExists('markers');
    }
}
