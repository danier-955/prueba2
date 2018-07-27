<?php

use App\Empleado;
use App\TipoEmpleado;
use Facades\App\Facades\Estado;
use Faker\Generator as Faker;

$factory->defineAs(Empleado::class, Estado::activo(), function (Faker $faker)
{
    return [
        'fech_ingr' => $faker->date(),
        'esta_empl' => Estado::activo(),
        'obse_empl' => $faker->text,
        'tipo_empleado_id' => TipoEmpleado::all()->random()->id,
    ];
});

$factory->defineAs(Empleado::class, Estado::inactivo(), function (Faker $faker)
{
    return [
        'fech_ingr' => $faker->date(),
        'esta_empl' => Estado::inactivo(),
        'obse_empl' => $faker->text,
        'tipo_empleado_id' => TipoEmpleado::all()->random()->id,
    ];
});
