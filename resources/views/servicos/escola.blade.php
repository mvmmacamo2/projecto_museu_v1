@extends('layouts.master')

@section('title')
    Requisição De Visita Guiada Escolar
@stop

@section('content')

<!-- Blog Section -->
@foreach($escolas as $escola)
    @if($escola->nome_responsavel == Auth()->user()->name)
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row">      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form  id="form_escola" method="POST" action="{{URL::to('escola-save')}}">

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="data">Data Realizacao da visita</label>
                      <input type="date" class="form-control" name="data" id="data" required>
                      <div class="invalid-feedback">
                        Introduza uma Data Válida..!
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="hora">Hora Da Visita</label>
                        <input type="time" class="form-control" id="hora" required name="hora">
                        <div class="invalid-feedback">
                            Introduza uma Hora Válida..!
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="escola">Escola</label>
                        <select id="escola" class="form-control" name="escola_id">
                         <option selected>Escolha a Escola:</option>
                            <option>Secundaria de Laulane</option>
                      </select>
                    </div>

                    <div class="col-md-8 mb-3">
                        <label for="descricao">Descrição da Visita</label>
                        <textarea style="min-height: 100px" class="form-control" id="descricao" required name="descricao"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-common btn-md mt-20" id="btn-save">
                        Enviar
                    </button>

                </form>

            </div>
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
    </section>
    <!-- blog Section End -->
    @endif
@endforeach
<h3>O Museu Tem Vindo a Trabalhara com as escolas desde a sua abertura, se for um Responsavel de uma delas entre em contacto connosco atraves de links que estao na no footer da site</h3>
{{--@if($escola->nome_responsavel != Auth()->user()->name)--}}
   {{----}}
{{--@endif--}}
@endsection




@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#form_escola', function (event) {
            event.preventDefault();
            //alert('Miguel')
            var data = $(this).serialize()
            var url = $(this).attr('action')
            var post = $(this).attr('method')
            $.ajax({
                type: post,
                url: url,
                data: data,
                dataType: 'json',
                success: function (data) {
                    console.log('data-save', data)
                }
            });
        })
    </script>
@stop

