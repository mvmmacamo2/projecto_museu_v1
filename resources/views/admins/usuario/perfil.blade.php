{{--@foreach($usuario as $u)--}}

{{--{{ $id=$u->id }}--}}

{{--@if(Auth()->user()->id ==$id )--}}
{{--{{$u}}--}}
{{--@endif--}}


{{--@endforeach--}}


@extends('master-admin')

@section('content-admin')

    <div class="row">
        <div class="col-lg-10">
            <h3 class="page-header">Actualizando o Perfil</h3>
        </div>

    </div>

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Meu Perfil
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">

                    <form  method="post"  action="{{ url('usuario', $usuario->id) }}">
                        {!! csrf_field() !!}

                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" value="{{$usuario->name}}" readonly name="name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="" name="username"
                                       value="{{$usuario->username}}">

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" readonly   value="{{$usuario->email}}">

                            </div>

                            <div class="form-group col-md-4">
                                <label for="telefone">Nr Celular</label>
                                <input type="text" name="telefone" id="telefone" class="form-control"   value="{{$usuario->telefone}}">

                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputid">ID</label>
                                <input type="text" class="form-control" id="inputid" readonly value="{{$usuario->id}}">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Endereço</label>
                                <input type="text" class="form-control" id="endereco" placeholder="Endereco"
                                       value="{{$usuario->endereco}}" name="enedereco">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="sexo">Sexo</label>
                                <select class="form-control" id="sexo">

                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nome">Sexo</label>
                                <input type="text" class="form-control" id="sexo" placeholder="Sexo Actual"  value="{{$usuario->sexo}}" name="" readonly>

                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary">Actualizar</button>

                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop