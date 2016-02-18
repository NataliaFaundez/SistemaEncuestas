<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    //
    protected $table = "encuestas";

    protected $fillable = [
        'proyecto_id', 
        'folio_a', 
        'folio_b', 
        'rut',  
        'direccion', 
        'numero', 
        'block', 
        'departamento', 
        'comuna_id',
        'telefono', 
        'celular', 
        'contacto1', 
        'contacto2',
        
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

     public function comuna()
    {
        return $this->belongsTo(Comuna::class);
    }
}


