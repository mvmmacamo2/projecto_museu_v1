<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exposicao;
use App\User;

class ExposicaoGaleria extends Model
{

    public function galeriaexposicoes()
    {
        return $this->hasMany(Exposicao::class);
        return $this->hasMany(User::class);
    }


    protected $fillable = [

        'nome', 'imagem', 'descricao', 'estado', 'usuario_id', 'exposicao_id'
    ];
}
