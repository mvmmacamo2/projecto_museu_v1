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
                  sdgashdgfasgdvdbsvc

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop