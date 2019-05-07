<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\KermesDonor;
use App\Kermes;
use App\Donor;
use Faker\Generator as Faker;

$factory->define(KermesDonor::class, function (Faker $faker) {
    return [
        'kermes_id' => function()
        {
            return Kermes::all()->random();
        },
        'donor_id' => function()
        {
            return Donor::all()->random();
        }
    ];
});
