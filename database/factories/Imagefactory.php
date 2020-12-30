<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Image::class, function (Faker $faker) {
    $imageables =[
        App\User::class,
        App\productline::class,
        ];
    $imageableType= $faker->randomElement($imageables);
    $imageables =factory($imageableType)->create();
    return [
      'url' =>$faker->url.'image.jpg',
        'imageable_type' => $imageableType,
        'imageable_id' => $imageables->id,


    ];
});
