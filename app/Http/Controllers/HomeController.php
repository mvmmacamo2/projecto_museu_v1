<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exposicao;
use App\Evento;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exposicoes = Exposicao::all();
        $eventos = Evento::all();
        $usuarios = User::all();
       $u= Auth()->user();
        return $u;
        //return view('home-admin', compact('exposicoes', 'eventos', 'usuarios'));
    }
}
