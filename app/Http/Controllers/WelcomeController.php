<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $likesexposicao =count(DB::table('like_exposicaos')->get());

        return view('welcome', ['nrlike'=>'4']);
    }
}
