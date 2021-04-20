<?php

use Faker\Generator as Faker;

$factory->define(frutera\Categoria::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'name' => $title,
        'descripcion' => $faker->text(500),

        //
    ];
});
