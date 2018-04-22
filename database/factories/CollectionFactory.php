<?php

use Faker\Generator as Faker;

$factory->define(App\Collection::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'pictureID' => $faker->ssn()
    ];
});
