<?php

use App\Docente;
use App\Empleado;
use App\User;
use Facades\App\Facades\Estado;
use Illuminate\Database\Seeder;

class DocentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Docente::class, 15)->create();
    }
}
