<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        Model::unguard();//desactiva los datos por lotes

        $this->call(RegionesTableSeeder::class);
        $this->call(ComunasTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(EncuestasTableSeeder::class);
        $this->call(ProyectosTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(Usuarios_EncuestasTableSeeder::class);

        Model::reguard(); // activa los datos por lotes
    }
}
