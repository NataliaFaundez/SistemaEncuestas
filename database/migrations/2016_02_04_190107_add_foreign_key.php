<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyectos', function($table)
        {
            $table->foreign('cliente_id')->references('id')->on('clientes'); 
        });
        Schema::table('encuestas', function($table)
        {
            $table->foreign('comuna_id')->references('id')->on('comunas'); 
            $table->foreign('proyecto_id')->references('id')->on('proyectos'); 
        });
        Schema::table('comunas', function($table)
        {
            $table->foreign('region_id')->references('id')->on('regiones'); 
        });
        Schema::table('usuarios', function($table)
        {
            $table->foreign('cliente_id')->references('id')->on('clientes'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyectos', function($table)
        {
            $table->dropForeign('proyectos_cliente_id_foreign');
        });
        Schema::table('encuestas', function($table)
        {
            $table->dropForeign('encuestas_comuna_id_foreign');
            $table->dropForeign('encuestas_proyecto_id_foreign');
        });
        Schema::table('comunas', function($table)
        {
            $table->dropForeign('comunas_region_id_foreign');
        });
        Schema::table('usuarios', function($table)
        {
            $table->dropForeign('usuarios_cliente_id_foreign');
        });
    }
}
