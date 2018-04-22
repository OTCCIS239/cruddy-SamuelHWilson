<?php

use Faker\Generator as Faker;

$factory->define(App\Label::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'pictureID' => $faker->ssn()
    ];
});
