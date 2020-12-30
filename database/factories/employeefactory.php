<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [/*
        'reports' => $faker->text,
        'LastName' => $faker->lastName,
        'FirstName' => $faker->firstName,
        'EXtension' => $faker->text,
        'Email' => $faker->email,
        'JobTie' => $faker->text,
       'office_id' => \App\office::all()->random()->id,

*/
    ];
});
