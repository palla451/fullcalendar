<?php

use Faker\Generator as Faker;

use App\Event;
use Carbon\Carbon;

$factory->define(Event::class, function (Faker $faker) {

    $date_start = $faker->dateTimeThisYear();
    $date_end = new Carbon($date_start->format('r'));

    return [
        'title' => $faker->sentence(4),
        'body' => $faker->text(10),
        'start' => $date_start,
        'end'   => $date_end->addHours($faker->numberBetween(1,35)),
        'color' => $faker->hexColor
    ];
});


