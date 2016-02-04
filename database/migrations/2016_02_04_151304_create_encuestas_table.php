<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');    
            $table->string('estado');  
            $table->integer('folio_a');
            $table->integer('folio_b');  
            $table->string('rut');  
            $table->integer('comuna_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();

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
        Schema::drop('encuestas');
    }
}
