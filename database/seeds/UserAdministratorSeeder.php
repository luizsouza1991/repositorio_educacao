<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserAdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'data_nascimento' => '1997-05-26',
            'formacao' => 'licenciatura em computação',
            'curso_formacao' => 'licenciatura em computação',
            'instituicao' => 'Universidade do Estado do Amazonas',
            'password' => Hash::make('admin'),
            'perfil' => 'admin'
        ]);
    }
}
