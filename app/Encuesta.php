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
        'region_id'
        'comuna_id',
        'proyecto_id', 
        
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


