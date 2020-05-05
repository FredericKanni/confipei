<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producteur;
use Faker\Generator as Faker;

$factory->define(Producteur::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
