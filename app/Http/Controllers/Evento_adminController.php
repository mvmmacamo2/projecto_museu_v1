<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use Auth;
use App\user;
use File;
use App\Exposicao;

class Evento_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('admins.eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admins.eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->imagem){
            $imagem = $request -> imagem;
            $extension =  $imagem -> getClientOriginalExtension();
            if($extension!='png' && $extension!='jpg'){ 
                return back() -> with('erro', 'Erro: Este ficheiro não é imagem..!');
            }

        }

        $evento = new Evento;

        $evento -> descricao  = $request -> descricao;
        $evento -> imagem     = "";
        $evento -> estado     = $request -> estado;
        $evento -> data       = $request -> data;
        $evento -> hora       = $request -> hora;
        $evento -> publico    = $request -> publico;
        $evento-> id_usuario  = Auth::user()->id;
        $evento -> save();

        if($request->imagem)
        {
            File::move($imagem, public_path().'/evento_upload/evento-id-'.$evento->id.'.'.$extension);

            $evento -> imagem = 'evento-id-'.$evento->id.'.'.$extension;

            $evento -> save();
        }

        
        return redirect('/admins/eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento = Evento::find($id);
        $exposicao=Exposicao::all();
        return view('admins.eventos.edit', compact('evento'), compact('exposicao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
