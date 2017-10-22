<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Escola;

class VisitagEscola extends Model
{
    public function pedidos()
    {
        return $this->hasMany(Escola::class);
    }
}
