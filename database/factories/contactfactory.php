<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\contact::class, function (Faker $faker) {
    return [
        'LastName' => $faker->lastName,
        'FirstName' => $faker->firstName,
        'Email' => $faker->email,
    ];
});
