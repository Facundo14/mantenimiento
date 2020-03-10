<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'piso_id'
    ];

    // Para guardar campos en mayusculas
    public function setNombreAttribute($value)
	{
	    $this->attributes['nombre'] = strtoupper($value);
	}

	public function setDescripcionAttribute($value)
	{
	    $this->attributes['descripcion'] = strtoupper($value);
	}

	public function pisos(){
    	return $this->belongsTo(Piso::class, 'piso_id');
    }
}
