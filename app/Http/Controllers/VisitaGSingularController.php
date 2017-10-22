<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\V_visitag_singular;

class VisitaGSingularController extends Controller
{

    public function visitaguiadasingular()
    {
        //$pedidos=DB::table('v_visitag_singulars')->get();

        $pedidos = V_visitag_singular::all();

        return view('admins.pedidos.visitasgsingulares', compact('pedidos'));
    }

    // acrescentado o metodo renda do patio no controller de Visiatas guiadas Singulares


    public function prenda()
    {
        return view('admins.pedidos.patio');
    }

}
