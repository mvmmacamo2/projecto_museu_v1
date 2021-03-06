<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class V_visitag_singular extends Model
{

    protected $fillable = [
        'data', 'hora', 'descricao', 'updated_at', 'created_at'
    ];

    public function visitas()
    {

        return $this->hasMany(User::class);
    }
}
