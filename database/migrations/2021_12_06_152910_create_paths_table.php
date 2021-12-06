<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paths', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from')->constrained('markers');
            $table->foreignId('to')->constrained('markers');
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
        Schema::table('paths', function (Blueprint $table) {
            $table->dropForeign(['from']);
            $table->dropForeign(['to']);
        });

        Schema::dropIfExists('paths');
    }
}
