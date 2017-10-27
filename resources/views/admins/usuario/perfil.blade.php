xzhcxzhcv



@foreach($usuario as $u)

    {{ $id=$u->id }}

    @if(Auth()->user()->id ==$id )
        {{$u}}
    @endif



@endforeach


@extends('master-admin')

@section('content-admin')

    <div class="row">
        <div class="col-lg-10">
            <h1 class="page-header">Pedidos De Aluguer De Pátio</h1>
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
                                <input type="text" class="form-control" id="nome" placeholder="Email" value="name">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="username">UserName</label>
                                <input type="text" class="form-control" id="username" placeholder="Password">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputid">ID</label>
                                <input type="text" class="form-control" id="inputid">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop