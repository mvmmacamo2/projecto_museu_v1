<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD

        'name', 'username', 'email', 'password'

=======
        'name', 'username', 'email', 'password', 'nivelacesso', 'foto', 'estado', 'endereco', 'sexo', 'telefone', ''
>>>>>>> 57cfd768ce45b80e007cad5d5a301780ad2ae252
    ];

    /**
     * The attributes that should be hidden for arrays.

     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
