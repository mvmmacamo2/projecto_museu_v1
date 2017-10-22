<?php

namespace App;

use App\Apatio;
use  App\User;

use Illuminate\Database\Eloquent\Model;

class RespostaApatio extends Model
{
    public function respostas()
    {
        return $this->hasMany(Apatio::class);
        return $this->hasMany(User::class);
    }
}
