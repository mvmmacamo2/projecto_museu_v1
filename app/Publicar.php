<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\User;


class Publicar extends Model
{
    public function publicacoes()
    {
        return $this->hasMany(User::class);
    }
}
