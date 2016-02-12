<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "admin",
            'email' => "admin@admin.cl",
            'password' => bcrypt("123"),
            "admin" => 1,
            "controlador" => 0,
            "administrador_sistema" => 0,
            "encuestador" => 0,
        ]);
    }
}
