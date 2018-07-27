<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'bitacoras',
            'docentes',
            'empleados',
            'tipo_empleados',
            'users',
            'grados',
            'sub_grados',
        ]);

        /*
         * Ejecutar los seeders
         */
        $this->call(UsersTableSeeder::class);
        $this->call(TipoEmpleadosTableSeeder::class);
        $this->call(DocentesTableSeeder::class);
        $this->call(BitacorasTableSeeder::class);
        $this->call(GradosTableSeeder::class);
        $this->call(SubGradosTableSeeder::class);
    }

    /**
     * Vacias tablas antes de ejecutar las migraciones
     * @param array $tables
     * @return void
     */
    public function truncateTables(array $tables)
    {
        /*
         * Desactivar las restricciones de asignación en masa.
         */
        Eloquent::unguard();

        /*
         * Desactivamos la revisión de claves foráneas
         */
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        /*
         * Vaciar las tablas
         */
        foreach ($tables as $table)
        {
            DB::table($table)->truncate();
        }

        /*
         * Reactivamos la revisión de claves foráneas
         */
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}