<?php
use App\Grado;
use Facades\App\Facades\Jornada;
use Faker\Generator as Faker;

$factory->define(App\Grado::class,function (Faker $faker) {
    return [
        'nomb_grad' => $faker->unique()->name,
        'abre_grad' => $faker->randomNumber(2), 
        'jorn_grad' => $faker->randomElement(Jornada::indexados()),
    ];
});
