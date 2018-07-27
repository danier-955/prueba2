<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, Estado::activo())->create([
        	'email' => 'admin@ipca.test',
        ]);

        factory(User::class, Estado::activo(), 9)->create();

        factory(User::class, Estado::inactivo(), 10)->create();
    }
}
