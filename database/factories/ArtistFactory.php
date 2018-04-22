<?php

use Faker\Generator as Faker;

$factory->define(App\Artist::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'bio' => $faker->text(),
        'pictureID' => $faker->ssn(),
        'isPrimary' => '0',
        'isVocalist' => '0'
    ];
});
