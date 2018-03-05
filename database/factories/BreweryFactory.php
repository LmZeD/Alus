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
        'name' => str_random(10),
        'address1' => $faker->address(),
        'address2' => $faker->address(),
        'city' => $faker->city(),
        'state' => str_random(10),
        'code' => rand(10000, 99999),
        'country' => $faker->country(),
        'phone' => $faker->phoneNumber(),
        'filepath' => str_random(10),
        'website' => $faker->url(),
        'descript' => $faker->sentence(),
        'addUser' => 0,
        'lastMod' => $faker->dateTime()
    ];
});
