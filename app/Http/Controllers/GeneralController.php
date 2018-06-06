<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\likeevento;
use App\User;

class GeneralController extends Controller
{
    public function LikesEventos()
    {
       $likes_eventos  = likeevento::all();

       return response()->json(['data' => $likes_eventos], 200);
    }

    public function getUsers()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('admins.usuario.index', compact('users'));
       // return response()->json(['data' => $users], 200);
    }
}
