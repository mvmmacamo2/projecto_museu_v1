<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Exposicao extends Model
{

    public function exposicoes()
    {
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        'nome', 'descricao', 'imagem', 'estado',
    ];
}
