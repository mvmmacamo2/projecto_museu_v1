@extends('master-admin')

@section('content-admin')
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">Exposições</h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Imagem</th>
                                        <th>Estado</th>
                                        <th>Acção</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($exposicaos as $exposicao)
                                    <tr class="odd gradeX">
                                        <td>{{$exposicao->nome}}</td>
                                        <td>{{$exposicao->descricao}}</td>
                                        <td>
                                        	<img style="max-width: 40px;" src="/expo-upload/{{$exposicao->imagem}}">
                                        </td>
                                        <td>{{$exposicao->estado}}</td>
                                        <td>
                                        	<a href="/exposicoes/{{ $exposicao->id }}/edit">
                                        		<button class="btn btn-success">Editar</button>
                                        	</a>
                                        	-- <button class="btn btn-danger">Apagar</button>
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