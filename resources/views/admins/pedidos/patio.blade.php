@extends('layouts.master-admin')

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
                Lista de Eventos
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover table-light"
                id="dataTables-example">
                <thead>

                    <tr>
                        <th>Nome utilizador</th>
                        <th>Email</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Data De Submissão</th>
                        <th>Descrição</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($pedidosp as $p)
                    <tr class="odd gradeX">
                        <td>{{$p->name}}</td>
                        <td>{{$p->email}}</td>

                        {{--<td>--}}
                            {{--<img style="max-width: 40px;" src="/evento_upload/{{$evento->imagem}}">--}}
                        {{--</td>--}}

                        <td>{{$p->data}}</td>
                        <td>{{$p->hora}}</td>
                        <td>{{$p->created_at}}</td>
                        <td>{{$p->descricao}} </td>


                        {{--<td>--}}
                            {{--<a href="/admin/eventos/{{ $evento->id }}/edit">--}}
                                {{--<button class="btn btn-success">Editar</button>--}}
                            {{--</a>--}}
                            {{--<button class="btn btn-danger">Apagar</button>--}}
                        {{--</td>--}}
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