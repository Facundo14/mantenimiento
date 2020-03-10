<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'pedido', 'sector_id', 'user_id', 'prioridad_id', 'estado', 'observaciones'
    ];
}
