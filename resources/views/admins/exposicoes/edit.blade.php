
@extends('layouts.master-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">

                <div class="panel-heading">Editar Exposição</div>

                <div class="panel-body">

                    {{--/admins/exposicoes/{{$exposicao->id}}--}}
                    {{--action=""--}}
                    {{--{{ method_field('PATCH') }}--}}
                    <form method="POST" action="/admins/exposicoes/{{$exposicao->id}}" enctype="multipart/form-data" id="form_edit">
                        Estado de Esposicao: <strong class="card-primary">{{$exposicao->estado}}</strong>
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        {{--<input name="estado" type="hidden" value="" class="form-control pull-right" id="estado">--}}

                         <input name="id_usuario" type="hidden" value="{{Auth::user()->id}}" class="form-control pull-right" id="id_usuario">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nome:</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input value="{{$exposicao->nome}}" name="nome" type="text" class="form-control pull-right" id="nome">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Descrição:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input value="{{$exposicao->descricao}}" name="descricao" type="text" class="form-control pull-right" id="descricao">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>


                        </div>
                        <!-- /.row -->

                        <div class="row">

                            <!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Estado:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <select id="estado" name="estado" class="form-control">
                                            <option>on</option>
                                            <option>off</option>
                                        </select>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Imegem:</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa  fa-ellipsis-h"></i>
                                        </div>
                                        <input class="form-control" type="file" name="imagem" id="imagem" value="{{$exposicao->imagem}}">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.row -->

                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Gravar </button>

                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Detalhes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl>
                        <dt>Nome da Exposicao</dt>
                        <dd>{{$exposicao->nome}}</dd>
                        <dt>Descricao</dt>
                        <dd>{{$exposicao->descricao}}</dd>
                        <dt>Estado</dt>
                        <dd>{{ $exposicao->estado }}</dd>
                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>


@endsection

@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '#form_edit', function (event) {
            event.preventDefault();

            alert('eh melhor Editar')
            var data = $(this).serialize()
            console.log('data', data)
            // var url = $(this).attr('action')
            // var post = $(this).attr('method')
            // $.ajax({
            //     type: post,
            //     url: url,
            //     data: data,
            //     dataType: 'json',
            //     success: function (data) {
            //         console.log('data-save', data)
            //     }
            // });
        })

    </script>
@endsection
