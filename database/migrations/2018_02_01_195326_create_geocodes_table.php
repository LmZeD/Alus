<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeocodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geocodes', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('breweryId')->unsigned();
            $table->double('latitude');
            $table->double('longitude');
            $table->string('accuracy', 18);
        });

        Schema::table('geocodes', function (Blueprint $table) {
            $table->foreign('breweryId')->references('id')->on('breweries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geocodes');
    }
}
