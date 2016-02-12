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
            "controlador" => 1,
            "administrador_sistema" => 1,
            "encuestador" => 1,
        ]);

        User::create([
            'name' => "encuestador",
            'email' => "encuestador@encuestador.cl",
            'password' => bcrypt("123"),
            "admin" => 0,
            "controlador" => 0,
            "administrador_sistema" => 0,
            "encuestador" => 1,
        ]);

        User::create([
            'name' => "controlador",
            'email' => "controlador@controlador.cl",
            'password' => bcrypt("123"),
            "admin" => 0,
            "controlador" => 1,
            "administrador_sistema" => 0,
            "encuestador" => 0,
        ]);

        User::create([
            'name' => "sistema",
            'email' => "sistema@sistema.cl",
            'password' => bcrypt("123"),
            "admin" => 0,
            "controlador" => 0,
            "administrador_sistema" => 1,
            "encuestador" => 0,
        ]);
    }
}
