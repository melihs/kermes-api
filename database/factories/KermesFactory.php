<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Kermes;
use Faker\Generator as Faker;

$factory->define(Kermes::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'date' => $faker->date('Y-m-d'),
        'location' => $faker->locale,
        'total_donation' => $faker->numberBetween($min=0,$max=3000),
    ];
});
