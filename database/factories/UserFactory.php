<?php

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    $token = Str::random(80);
    return [
           'name' => $faker->name,
           'surname' => $faker->lastName,
           'email' => $faker->unique()->safeEmail,
           'email_verified_at' => now(),
           'password' => bcrypt(Str::random(10)),
           'remember_token' => Str::random(10),
           'type' => 'donors',
           'api_token'=> hash('sha256',$token)
    ];
});
