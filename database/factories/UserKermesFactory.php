<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserKermes;
use App\User;
use App\Kermes;
use Faker\Generator as Faker;

$factory->define(\App\UserKermes::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        },
        'kermes_id' => function() {
            return Kermes::all()->random();
        }
    ];
});
