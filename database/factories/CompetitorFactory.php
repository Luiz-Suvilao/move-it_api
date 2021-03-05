<?php

use App\Competitor;
use Faker\Generator as Faker;

$factory->define(Competitor::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'level' => 2,
        'complete_challenges' => 1,
        'experience' => 10
    ];
});
