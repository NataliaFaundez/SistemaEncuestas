<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    //
    protected $table = "comunas";

    protected $fillable = [
        'comuna',
        'region_id'
      
    ];

    public function region()
    {
    	return $this->belongsTo(Region::class);
    }
}
