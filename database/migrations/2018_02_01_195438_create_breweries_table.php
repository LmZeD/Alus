<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreweriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breweries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('address1',100);
            $table->string('address2',100);
            $table->string('city',30);
            $table->string('state',30);
            $table->integer('code');
            $table->string('country',100);
            $table->string('phone',20);
            $table->string('website',100);
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
        Schema::dropIfExists('breweries');
    }
}
