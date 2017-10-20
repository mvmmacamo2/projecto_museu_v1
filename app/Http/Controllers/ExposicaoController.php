<?php

namespace App\Http\Controllers;
use App\Exposicao;

use Illuminate\Http\Request;

class ExposicaoController extends Controller
{
    public function index()
    {
        $exposicoes = Exposicao::all();
        return view('exposicoes.index', compact('exposicoes'));
    }
}
