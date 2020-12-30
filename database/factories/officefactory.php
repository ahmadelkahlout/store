<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\office::class, function (Faker $faker) {
    return [
        'City' => $faker->city,
        'Phone' => $faker->phoneNumber,
        'Address1' => $faker->word,
        'Address2' => $faker->word,
        'State' => $faker->state,
        'Country' => $faker->country,
        'Territory' => $faker->city,
        'Code' => $faker->randomNumber(4)
    ];
});
