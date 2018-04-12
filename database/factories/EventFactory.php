<?php

use Faker\Generator as Faker;

use App\Event;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'body' => $faker->paragraph,
        'start' => $faker->dateTimeThisMonth(),
        'end'   => $faker->dateTimeThisMonth(),
        'color' => $faker->hexColor
    ];
});


