<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = "clientes";

    protected $fillable = [

        'nombre',
        'rut'
    ];
    public function proyectos()
    {
    	return $this->hasMany(Proyecto::class);

    }

}
