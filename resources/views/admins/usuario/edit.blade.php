@extends('layouts.master-admin')

@section('content-admin')

<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header">Actualizar Informacoes do User</h1>
    </div>

</div>

<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Adicionar Usuário
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder=""
                            value="{{$usuario->name}}" readonly name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Password"
                            name="username" value="{{$usuario->username}}" readonly>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nivel Acesso</label>
                                <input type="text" class="form-control" id="nome" placeholder=""
                                value="{{$usuario->nivelacesso}}" readonly name="nivel">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Estado</label>
                                <input type="text" class="form-control" id="username" placeholder="Password"
                                name="username" value="{{$usuario->estado}}" readonly>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="nome">Estado</label>
                                <select class="form-control">
                                    <option value="Activa">Activar</option>
                                    <option value="Desactivar">Desactivar</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nome">Nível Acesso</label>
                                <select class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Administrador">Administrador</option>

                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
@stop