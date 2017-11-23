<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exposicao;
use App\Evento;
use App\User;
use DB;

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
        $likesexposicao =DB::table('like_exposicaos')->get();
        $comentexposicao =DB::table('comtario_exposicaos')->get();
       // return $u->nivelacesso;
        $nivel = $u->nivelacesso;

        if ($nivel == 'Administrador') {
            return view('layouts.master-admin', compact('exposicoes', 'eventos','usuarios'));
        }elseif ($nivel=='Normal') {
           return view('welcome', compact('exposicoes', 'eventos','usuarios'))->with('nrlike',$likesexposicao)->with('comentexp', $comentexposicao);
           ; 
       }else{
        return view('welcome', compact('exposicoes', 'eventos','usuarios'));

    }

        // if ($nivel=='Normal'){
        //     return view('template_welcome');
        // }
}


}
