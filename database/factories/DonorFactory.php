<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Donor;
use Faker\Generator as Faker;

$factory->define(Donor::class, function (Faker $faker) {
    return [
        'balance' => $faker->numberBetween($min=0,$max=3000),
    ];
});
