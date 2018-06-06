<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespostaVisitaUser extends Model
{
    protected $fillable = [
        'to', 'user_id', 'estado', 'descricao', 'pedido_id'
    ];
}
