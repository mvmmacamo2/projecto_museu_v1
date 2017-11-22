@extends('layouts.master-admin')

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
                        <th>Nome Da Escola</th>
                        <th>Email</th>
                        <th>Responsavel</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Data De Submissão</th>
                        <th>Descrição</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($pedidos as $p)
                    <tr class="odd gradeX">
                        <td>{{$p->nome}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->nome_responsavel}}</td>
                        {{--<td>--}}
                            {{--<img style="max-width: 40px;" src="/evento_upload/{{$evento->imagem}}">--}}
                        {{--</td>--}}

                        <td>{{$p->data}}</td>

                        <td>{{$p->hora}}</td>
                        <td>{{$p->created_at}}</td>
                        <td>
                            <a href="#">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                  Ver Descrição <i class="fa fa-eye"></i>
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Descrição Do Pedido</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    {{$p->descricao}}.. 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </td>


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