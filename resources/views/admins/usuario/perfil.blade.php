


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

                    <form>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome"   value="sds" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="username">UserName</label>
                                <input type="text" class="form-control" id="username" placeholder="Password"  name="username" >

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" readonly>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="telefone">Nr Celular</label>
                                <input type="text" name="telefone" id="telefone" class="form-control">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="inputid">ID</label>
                                 <input type="text" class="form-control" id="inputid" readonly>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Endereço</label>
                                <input type="text" class="form-control" id="endereco" placeholder="Endereco" value="" name="enedereco" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="sexo">Sexo</label>
                                <select cl
                                        ass="form-control" id="sexo">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
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