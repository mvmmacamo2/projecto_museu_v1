<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index()
	{
		$nrlike =count(DB::table('like_exposicaos')->get());

		return view('welcome', compact('nrlike'));
	}
}
