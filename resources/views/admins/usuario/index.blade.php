@extends('layouts.master-admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">





            <div id="app">

             <div class="panel-heading">
                 {{--  Lista de Usuários --}}
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">

                {{-- <example></example> --}}
                <users></users>
            </div>
            <!-- /.panel-body -->
        </div>


    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
@stop