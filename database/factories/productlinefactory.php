<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\productline::class, function (Faker $faker) {
    return [
        'Name' => $faker->name,
        'DescInHTML' => $faker->text,
    ];
});
