<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        'donor_id' =>$faker->numberBetween($min= 1,$max = 10),
        'user_id' =>$faker->numberBetween($min= 1,$max = 10),
        'sales' =>$faker->firstNameMale,
        'return' =>$faker->boolean,
        'product' =>$faker->name,
        'transfer' =>$faker->randomLetter(),
        'payment' =>$faker->numberBetween($min= 10,$max = 1000),
        ];
});
