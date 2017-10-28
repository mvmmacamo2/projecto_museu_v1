<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exposicao;

class ExposicaoGaleria extends Model
{
    protected  $fillable= [

        'nome', 'descricao', 'imagem', 'estado','usuario_id', 'exposicao_id'
    ];



    public function galeriaexposicoes()
    {
       return $this->hasMany(Exposicao::class);
    }
}
