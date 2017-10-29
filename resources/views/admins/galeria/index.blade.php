@extends('master-admin')

@section('content-admin')
    <div class="row">
        <div class="col-lg-10">
            <h1 class="page-header">Galeria de Exposições</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Exposições
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <label>Exposição</label>
                    <select class="form-control">
                        @foreach($exposicao as $exp)
                            <option value="{{$exp->id}}">{{ $exp->nome }}</option>
                        @endforeach
                    </select>
                    <br>

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Nome Da Exposicao</th>
                            <th>Nome Da Galeria</th>
                            <th>Descricao</th>
                            <th>Adicionada Por</th>
                            <th>Estado</th>
                            <th>Data de Adicao</th>
                            <th>Acção</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($vgaleria as $g)
                        <tr>
                            <td>{{$g->nomeexposicao}}</td>

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