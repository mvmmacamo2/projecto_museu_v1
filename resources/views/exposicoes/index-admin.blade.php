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
                                        	<!-- <a href="/exposicoes/{{ $exposicao->id }}/edit">
                                        		<button class="btn btn-success">Editar</button>
                                        	</a> -->



    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Editar
        </button>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

		      <div class="modal-body">
		        <form class="" method="POST" action="/exposicoes/{{ $exposicao->id }}">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
		          	<div class="form-group">
						<label for="nome">Nome</label>
						<input name="nome" class="form-control" value="{{ $exposicao->nome }}"></input>
					</div>

					<div class="form-group">
						<label for="descricao">Descrição</label>
						<textarea name="descricao" class="form-control">{{ $exposicao->descricao }}</textarea>
					</div>

					<div class="form-group">
						<label for="imagem">Imagem</label>
						<input name="descricao" class="form-control" value="{{ $exposicao->imagem }}"></input>
					</div>

					<div class="form-group">
						<label for="estado">Estado</label>
						<select name="descricao" class="form-control">
							<option>
								delete
							</option>
							<option>
								proccess
							</option>
						</select>
					</div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        <button type="submit" class="btn btn-primary">Editar</button>
		      </div>
		    </div>
		  </div>
		</div>


    	<button class="btn btn-danger">Apagar</button>
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