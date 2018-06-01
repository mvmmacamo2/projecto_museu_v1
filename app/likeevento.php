<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likeevento extends Model
{
    protected $fillable = [
        'like', 'evento_id', 'usuario_id'
    ];
}
