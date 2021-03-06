<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proyectos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('proyecto');
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();            
                  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('proyectos');
    }
}
