<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
    	'descricao', 'publico', 'imagem', 'data', 'hora', 'id_usuario', 'estado'
    ];
}
