<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Confiture;
use App\Producteur;
use Faker\Generator as Faker;

$factory->define(Confiture::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'stock' => $faker->numberBetween($min = 10, $max = 90),
        'id_producteur' => Producteur::all()->random()->id,
    ];
});
