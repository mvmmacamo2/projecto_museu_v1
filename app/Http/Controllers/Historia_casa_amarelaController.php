<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Historia_casa_amarelaController extends Controller
{
	public function index()
    {
        return view('historias.amarela.index');
    }
    
}
