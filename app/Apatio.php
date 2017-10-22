<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Apatio extends Model
{
    public function pedidos()
    {
        return $this->hasMany(User::class);
    }
}
