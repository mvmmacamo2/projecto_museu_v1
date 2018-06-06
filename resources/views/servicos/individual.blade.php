@extends('layouts.master')

@section('title')

Requisição De Visita Guiada Individual

@stop

@section('content')


@if(session()->has('message'))
<div class="alert alert-success">
  {{ session()->get('message') }}
</div>
@else
@if(session()->has('message'))
<div class="alert alert-danger">
  {{ session()->get('message') }}
</div>
@endif
@endif


<!-- Blog Section -->
<section id="blog" class="section">
  <!-- Container Starts -->
  <div class="container">
    <!-- Row Starts -->
    <div class="row">      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form method="post" action="/servicos/individual">
          {!! csrf_field() !!}

          <div class="row">

            <div class="col-md-3 mb-3">
              <label for="descricao">Data Realizacao do Evento</label>
              <input type="date" class="form-control" id="descricao" required name="data">
              <div class="invalid-feedback">
                Introduza uma Data Válida..!
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <label for="hora">Hora Da Visita</label>
              <input type="time" class="form-control" id="hora" required name="hora">
              <div class="invalid-feedback">
                Introduza uma Hora Válida..!
              </div>
            </div>
            <input type="hidden" name="usuario_id" value="{{ Auth()->user()->id }}">
            <div class="col-md-6 mb-3">
              <label for="descricao">Descrição da Visita</label>
              <textarea style="min-height: 100px" class="form-control" id="descricao" required name="descricao"></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-common btn-md mt-20">
            Enviar
          </button>
        </form>

      </div>
    </div><!-- Row Ends -->
  </div><!-- Container Ends -->
</section>
<!-- blog Section End -->







<h4>Pedidos Feitos</h4>
<table class="table table-bordered table-stripped table-responsive">

 <thead>
  <tr>
    <th>Detalhes do Pedido</th>
    <th>Data do Pedido</th>
    <th>Hora do Pedido</th>
    <th>Feito </th>
  </tr>
</thead>

<tbody>
  @foreach($pedidos as $p)

  <tr>
    <td>{!! $p->descricao !!}</td>
    <td>{!! $p->data !!}</td>
    <td>{!! $p->hora !!}</td>
    <td>{{$p->created_at}}</td>

  </tr>

  @endforeach

</tbody>

</table>
<div>

</div>
<br>
<table class="table table-bordered table-stripped table-responsive">
 <h4>Resposta Dos pedidos</h4>
    <thead>
    <tr>
        <th>ID</th>
        <th>Detalhes do Pedido</th>
        <th>Responsavel</th>
        <th>Data</th>
        <th>Estado</th>
        <th>Motivo</th>
    </tr>
    </thead>

    <tbody>
    @foreach($respostas as $p)

        <tr>
            <td>{!! $p->id_r !!}</td>
            <td>{!! $p->descricao !!}</td>
            <td>{!! $p->name !!}</td>
            <td>{!! $p->created_at !!}</td>
            <td>{!! $p->estado !!}</td>
            <td>{{$p->messagem}}</td>

        </tr>

    @endforeach

    </tbody>

</table>


@endsection




