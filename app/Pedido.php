<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'pedido', 'sector_id', 'user_id', 'prioridad_id', 'estado', 'observaciones'
    ];

    public function sector(){
    	return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function user(){
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function prioridad(){
    	return $this->belongsTo(Prioridad::class, 'prioridad_id');
    }


}
