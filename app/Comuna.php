<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    //
    public function sucursals()
    {
    	//RELACION
    	//una comuna pertenece o tiene muchas sucursales
    	return $this->hasMany(Sucursal::class);
    }
}
