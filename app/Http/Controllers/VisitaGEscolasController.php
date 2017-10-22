<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitaGEscolasController extends Controller
{
    public function visitaguiadaescolar()
    {
        return view('admins.pedidos.visitasgescolas');
    }
}
