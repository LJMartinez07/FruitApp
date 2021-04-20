<?php

use Faker\Generator as Faker;

$factory->define(frutera\Fruta::class, function (Faker $faker) {

    $title = $faker->sentence(4);
    return [
        'name' => $faker->name,
        'precio' => 1000,
        'slug' => $faker->slug,
        'file' 	=> $faker->imageUrl($width = 1200, $height = 400),

    ];
});
