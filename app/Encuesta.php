<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    //
    protected $table = "encuestas";

    protected $fillable = [
        'estado',
        'folio_a', 
        'folio_b', 
        'rut',  
        'direccion', 
        'numero', 
        'block', 
        'departamento', 
        'telefono', 
        'celular', 
        'contacto1', 
        'contacto2',
        'comuna_id',
        'proyecto_id', 
        
    ];
}


