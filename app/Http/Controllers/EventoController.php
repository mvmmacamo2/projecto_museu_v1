<?php

namespace App\Http\Controllers;
use App\Evento;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
//        $eventos = Evento::all();

        $eventos = DB::table('likeeventos')
            ->join('eventos', 'likeeventos.evento_id', '=', 'eventos.id')
            ->select('eventos.*', 'likeeventos.*')
            ->get();
        return view('/eventos.index', compact('eventos'));
    }
}
