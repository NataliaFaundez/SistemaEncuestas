<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    //
       protected $table = "comunas";

    protected $fillable = [
        'comuna',
        'region'
      
    ];
}
