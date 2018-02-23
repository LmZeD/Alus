<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('breweryId')->unsigned();
            $table->string('name', 100);
            $table->integer('catId');
            $table->integer('styleId');
            $table->double('abv');
            $table->double('ibu');
            $table->double('srm');
            $table->integer('upc');
            $table->string('filepath', 100);
            $table->text('descript');
            $table->string('addUser', 8);
            $table->dateTime('lastMod');
        });

        Schema::table('beers', function (Blueprint $table) {
            $table->foreign('breweryId')
                ->references('id')->on('breweries')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
