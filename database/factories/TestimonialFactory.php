<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'author_id' => function () {
            return factory(\App\Models\Author::class)->create()->id;
        },
        'body' => $faker->realText(),
    ];
});
