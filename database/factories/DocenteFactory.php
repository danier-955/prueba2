<?php

use App\Docente;
use App\Empleado;
use App\User;
use Facades\App\Facades\Estado;
use Facades\App\Facades\Sexo;
use Faker\Generator as Faker;

$factory->define(Docente::class, function (Faker $faker)
{
	$user = factory(User::class, Estado::activo())->create();

	$empleado = factory(Empleado::class, Estado::activo())->create();

	$nombres = explode(' ', $user->nombre);

    return [
        'docu_doce' => $faker->unique()->randomNumber(7),
        'nomb_doce' => $nombres[0],
        'pape_doce' => $nombres[1],
        'sape_doce' => $nombres[2],
        'sexo_doce' => $faker->randomElement(Sexo::indexados()),
        'dire_doce' => $faker->streetAddress,
        'barr_doce' => $faker->streetName,
        'corr_doce' => $user->email,
        'tele_doce' => $faker->randomNumber(7),
        'titu_doce' => $faker->jobTitle,
        'espe_doce' => implode(', ', $faker->sentences),
        'expe_doce' => $faker->text,
        'obse_doce' => $faker->text,
        'empleado_id' => $empleado->id,
        'user_id' => $user->id,
    ];
});