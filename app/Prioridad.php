<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
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

	 public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
