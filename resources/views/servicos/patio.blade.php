@extends('layouts.master')

@section('title')
Requisição De Aluguer De Pátio
{!! $message !!}
@stop

@section('content')

<!-- Blog Section -->
<section id="blog" class="section">
  <!-- Container Starts -->
  <div class="container">
    <!-- Row Starts -->
    <div class="row">      
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form method="post" action="/servicos/patio">
         {!! csrf_field() !!}

         <div class="row">

          <div class="col-md-3 mb-3">
            <label for="descricao">Data Realizacao do Evento</label>
            <input type="date" class="form-control" id="descricao" name="data" required>
            <div class="invalid-feedback">
              Introduza uma Data Válida..!
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <label for="hora">Hora Da Visita</label>
            <input type="time" class="form-control" id="hora" name="hora" required>
            <div class="invalid-feedback">
              Introduza uma Hora Válida..!
            </div>
          </div>

          <input type="hidden" value="{!! Auth()->user()->id !!}" name="usuario_id">
          <input type="hidden" name="estado" value="Recebido"> 

          <div class="col-md-6 mb-3">
            <label for="descricao">Descrição do pedido de Renda do Pátio</label>
            <textarea name="descricao" style="min-height: 100px" class="form-control" id="descricao" required></textarea>
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

@endsection




