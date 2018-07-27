<?php

use App\User;
use App\Bitacora;
use Faker\Generator as Faker;

$factory->define(Bitacora::class, function (Faker $faker)
{
	$operaciones = [
		Operacion::registrado(), Operacion::actualizado(), Operacion::eliminado()
	];

	$tablas = [
		'Acudientes', 'Administrativos', 'Alumnos', 'Areas', 'Asignaturas', 'Asistencias',
		'Calendarios', 'Docentes', 'Empleados', 'Estudiantes', 'Eventos', 'Fechas',
		'Galerias', 'Grados', 'Implementos', 'Inventarios', 'Mesas', 'Nominas',
		'Notas', 'Pagos', 'Permissions', 'Planeamientos', 'Practicantes', 'Roles', 'Salidas',
		'SubGrados', 'TipoEmpleados', 'Usuarios',
    ];

    return [
        'oper_bita' => $faker->randomElement($operaciones),
        'tabl_bita' => $faker->randomElement($tablas),
        'user_id' 	=> User::all()->random()->id,
    ];
});
