@extends('layouts.master-admin')

@section('content')

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
							<td class="label label-success label-sm">{{$exposicao->estado}}</td>
							<td>
								<a href="/admins/exposicoes/{{ $exposicao->id }}/edit">
									<button class="btn btn-success">Editar</button>
								</a>
								<a href="">
									<button class="btn btn-danger">Apagar</button>
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