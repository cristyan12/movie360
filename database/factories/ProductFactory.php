<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(rand(100, 255)),
        'type' => $faker->randomElement(['DVD', 'Game', 'CD']),
        'price' => $faker->randomFloat(2, 10, 500),
        'genre' => $faker->randomElement(['Acción', 'Aventura', 'ShooterRPG', 'Sports', 'Ficción']),
        'size'	=> $faker->randomNumber(),
    ];
});
