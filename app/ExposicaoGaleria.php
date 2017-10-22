<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exposicao;

class ExposicaoGaleria extends Model
{
    public function galeriaexposicoes()
    {
       return $this->hasMany(Exposicao::class);
    }
}
