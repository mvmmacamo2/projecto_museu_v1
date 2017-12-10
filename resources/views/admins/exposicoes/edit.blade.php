{{-- @extends('layouts.master-admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Nome Da Exposição: {{ $exposicao->nome }}
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="/admins/exposicoes/{{$exposicao->id}}" enctype="multipart/form-data">  
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <input type="hidden" name="estado" value="{{ $exposicao->estado }}">

                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="nome" type="text" class="form-control" name="nome" value="{{ $exposicao->nome }}" required autofocus>

                            @if ($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                        <label for="descricao" class="col-md-4 control-label">Descrição</label>

                        <div class="col-md-6">
                            <input id="descricao" type="text" class="form-control" name="descricao" value="{{ $exposicao->descricao }}" required autofocus>

                            @if ($errors->has('descricao'))
                            <span class="help-block">
                                <strong>{{ $errors->first('descricao') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                        <label for="imagem" class="col-md-4 control-label">Imagem</label>

                        <div class="col-md-6">
                            <input id="imagem" type="file" class="form-control" name="imagem" value="{{ $exposicao->imagem }}" required>

                            @if ($errors->has('imagem'))
                            <span class="help-block">
                                <strong>{{ $errors->first('imagem') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Gravar Alteração
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop --}}



@extends('layouts.master-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Exposição</div>

                <div class="panel-body">


                    <form action="/admins/exposicoes/{{$exposicao->id}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        <input name="estado" type="hidden" value="desactivado" class="form-control pull-right" id="estado">

                        {{-- <input name="id_usuario" type="hidden" value="{{Auth::user()->id}}" class="form-control pull-right" id="id_usuario"> --}}

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
                                            <option>proccess</option>
                                            <option>delete</option>
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
                                        <input class="form-control" type="file" name="imagem" id="imagem">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.row -->


                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Gravar
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
