<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //un trabajador puede estar en muchas sucursales
    public function sucursals()
    {
    	return $this->hasMany(Sucursal::class);
    }

}
