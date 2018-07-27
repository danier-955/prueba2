<?php

use App\TipoEmpleado;
use Illuminate\Database\Seeder;

class TipoEmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TipoEmpleado::class, 5)->create(); // CReara 10 tipos de empleados
    }
}
