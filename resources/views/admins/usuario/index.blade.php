@extends('master-admin')

@section('content-admin')

    <div class="row">
        <div class="col-lg-10">
            <h1 class="page-header">Visita Guiada Escolar</h1>
        </div>

    </div>

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Eventos
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover table-light"
                           id="dataTables-example">
                        <thead>

                        <tr>
                            <th>Nome</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nível Do User</th>
                            <th>Action</th>

                        </tr>

                        </thead>

                        <tbody>

                        @foreach($usuarios as $user)
                            <tr class="odd gradeX">
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->nivelacesso}}</td>
                                <td>
                                    <a href="#">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalLong">
                                            Ver Descrição <i class="fa fa-eye"></i>
                                        </button>


                                    <a href="/admin/usuario/{{ $user->id }}/edit">
                                        <button class="btn btn-success">Editar</button>
                                    </a>
                                    <button class="btn btn-danger">Apagar</button>
                            

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Descrição Do
                                                            Pedido</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{$user->foto}}..
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </td>



                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop