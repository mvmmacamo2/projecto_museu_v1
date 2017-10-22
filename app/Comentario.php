<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Publicar;

class Comentario extends Model
{
    public function comentarios()
    {
        return $this->hasMany(User::class);
        return $this->hasMany(Publicar::class);
    }
}
