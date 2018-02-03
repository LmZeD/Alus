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
            $table->increments('id');
            $table->integer('brewery_id');
            $table->string('name',100);
            $table->integer('cat_id');
            $table->integer('style_id');
            $table->double('abv');
            $table->double('ibu');
            $table->double('srm');
            $table->integer('upc');
            $table->string('filepath',100);
            $table->text('descript');
            $table->string('add_user',8);
            $table->dateTime('last_mod');
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
