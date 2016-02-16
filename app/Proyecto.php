<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = "proyectos";

    protected $fillable = [

        'proyecto',
        'cliente_id'
    ];

   
   public function cliente()
    {
    	return $this->belongsTo(Cliente::class);
    }
}
