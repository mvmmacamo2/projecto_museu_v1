@extends('layouts.master-admin')

@section('content')
    <div class="row">

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nova Utilizador
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/admins/escolas">

                        {{ csrf_field() }}

                        <input type="hidden" name="estado" value="Activa">

                        <input type="hidden" name="usuario_id" value="{{Auth()->user()->id}}">

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome Da Escola</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome"
                                       value="{{ old('nome') }}"
                                       required autofocus>

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                             <strong>{{ $errors->first('nome') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Email da Instituicao</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}"
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nivel') ? ' has-error' : '' }}">
                            <label for="nivel" class="col-md-4 control-label">Nivel de Ensino</label>

                            <div class="col-md-6">


                                <select class="form-control" name="nivel">

                                    <option >Prmario</option>
                                    <option >Medio</option>
                                    <option >Universitario</option>

                                </select>

                            </div>

                        </div>

                        {{--<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">--}}
                            {{--<label for="nome" class="col-md-4 control-label">Responsavel</label>--}}

                            {{--<div class="col-md-6">--}}


                                {{--<select class="form-control" name="nome_responsavel">--}}
                                    {{--@foreach($users as $user)--}}
                                        {{--<option value="{{$user->name}}">{{$user->name}}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}

                            {{--</div>--}}

                        {{--</div>--}}


                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Contacto</label>

                            <div class="col-md-6">
                                <input id="contacto" type="text" class="form-control" name="contacto"
                                       value="{{ old('contacto') }}"
                                       required autofocus>

                                @if ($errors->has('contacto'))
                                    <span class="help-block">
                             <strong>{{ $errors->first('contacto') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                            <label for="descricao" class="col-md-4 control-label">Endereco</label>

                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control" name="endereco"
                                       value="{{ old('endereco') }}" required autofocus>

                                @if ($errors->has('desc'))
                                    <span class="help-block">
                         <strong>{{ $errors->first('endereco') }}</strong>
                     </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
@stop
