@extends('layouts.master')

@section('title')

    Requisição De Visita Guiada Individual

@stop

@section('content')

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

@endsection




