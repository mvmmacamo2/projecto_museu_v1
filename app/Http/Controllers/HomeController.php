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

    public function index()
    {
        $exposicoes = Exposicao::all();
        $eventos = Evento::all();
        $usuarios = User::all();
        $u = Auth()->user();
       // return $u->nivelacesso;
        $nivel = $u->nivelacesso;

        if ($nivel == 'Administrador') {
            return view('home-admin', compact('exposicoes', 'eventos','usuarios'));
        }elseif ($nivel=='Normal') {
               return view('welcome', compact('exposicoes', 'eventos','usuarios')); 
        }else{
            return view('welcome', compact('exposicoes', 'eventos','usuarios'));

        }

        // if ($nivel=='Normal'){
        //     return view('template_welcome');
        // }
    }

    
}
