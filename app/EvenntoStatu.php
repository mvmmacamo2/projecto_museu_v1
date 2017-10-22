<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Evento;

class EvenntoStatu extends Model
{
    public function eventoestados()
    {
      return $this->hasMany(User::class, Evento::class);
    }
}
