<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class VisitaGuser extends Model
{
    protected $fillable = [
        'data','hora','descricao','usuario_id'
    ];

    public function visitas()
    {
        return $this->hasMany(User::class);
    }
}
