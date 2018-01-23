<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //
    public function comuna()
    {
    	//una sucursal pertenece a una comuna
    	return $this->belongsTo(Comuna::class)	;
    }
    public function work()
    {
    	return $this->belongsTo(Work::class);
    }
}
