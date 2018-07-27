<?php

use App\Grado;
use App\SubGrado; 
use Faker\Generator as Faker;

$factory->define(App\SubGrado::class, function (Faker $faker) {
    return [
        'abre_subg'	=> $faker->randomLetter,
        'cant_estu'	=> $faker->randomNumber(2),
        'grado_id'	=> Grado::all()->random()->id,

    ];
});
