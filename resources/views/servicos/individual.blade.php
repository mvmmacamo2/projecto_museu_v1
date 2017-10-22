@extends('layouts.master')




@section('title')
    Requisitando Visita Guiada Individual
@stop
@section('content')

    <form method="post" action="/servicos/individual">
        {!! csrf_field() !!}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="data">Data Realizacao do Evento</label>
                <input type="date" class="form-control" id="data" placeholder="" name="data">
            </div>

            <input type="hidden" name="usuario_id" value=" {{ Auth()->user()->id }}">
            <div class="form-group col-md-6">
                <label for="hora">Hora Da Visita</label>
                <input type="text" class="form-control" id="hora" placeholder="exemplo: 10h" name="hora">
            </div>
        </div>

        <div class="form-group">
            <label for="inputAddress">Descricao da Visita</label>

            <textarea class="form-control" cols="10" rows="5" placeholder="Coloque o motivo da Visita" name="descricao">

            </textarea>

        </div>


        <button type="submit" class="btn btn-success">Submeter</button>
    </form>


@stop
<br>