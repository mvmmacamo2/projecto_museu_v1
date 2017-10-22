<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Evento extends Model
{

    public function eventos()
    {
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        'descricao', 'publico', 'imagem', 'data', 'hora', 'id_usuario', 'estado'
    ];
}
