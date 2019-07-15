<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Series;
use Faker\Generator as Faker;

$factory->define(Series::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'image' => $faker->imageUrl(300, 300),
        'description' => $faker->realText(),
    ];
});

$factory->state(Series::class, 'archived', function (Faker $faker) {
    return [
        'created_at' => $faker->dateTimeBetween('-10 years', '-1 year'),
    ];
});
