<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Historia_museuController extends Controller
{
    public function index()
    {
        return view('historias.museu.index');
    }
}
