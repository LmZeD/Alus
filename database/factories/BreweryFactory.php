<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Brewery::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(1, 10000),
        'name' => $faker->name,
        'address1' => str_random(10),
        'address2' => str_random(10),
        'city' => str_random(10),
        'state' => str_random(10),
        'code' => rand(10000, 99999),
        'country' => str_random(10),
        'phone' => str_random(10),
        'website' => str_random(10).'.com',
        'descript' => str_random(100),
        'addUser' => 0,
        'lastMod' => $faker->dateTime()
    ];
});
