<?php

use Faker\Generator as Faker;

use App\Event;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'body' => $faker->text(10),
        'start' => $faker->dateTimeThisMonth(),
        'end'   => $faker->dateTimeThisMonth(),
        'color' => $faker->hexColor
    ];
});


