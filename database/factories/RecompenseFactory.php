<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recompense;
use Faker\Generator as Faker;

$factory->define(Recompense::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
