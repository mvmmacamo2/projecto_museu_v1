<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exposicao extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'imagem', 'estado',
    ];
}
