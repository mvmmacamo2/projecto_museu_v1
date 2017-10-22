<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class VisitaGuser extends Model
{
    public function visitas()
    {
        return $this->hasMany(User::class);
    }
}
