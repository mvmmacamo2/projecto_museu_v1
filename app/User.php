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
<<<<<<< HEAD
        'name', 'username', 'email', 'password', 'nivelacesso'
=======
        'name', 'username','nivelacesso', 'email', 'password'
>>>>>>> 8e03ef138d8e56f5b808c2aa7f5aca1705100633
>>>>>>> 08b3bb735465d56574a0a7f84b413719e15752c9
    ];

    /**
     * The attributes that should be hidden for arrays.

     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
