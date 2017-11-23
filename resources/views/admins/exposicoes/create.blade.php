@extends('layouts.master-admin')

@section('content')
<!-- /.row -->
<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				Nova Exposição
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="/admins/exposicoes" enctype="multipart/form-data">  
					{{ csrf_field() }}

					<input type="hidden" name="estado" value="proccess">

					<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
						<label for="nome" class="col-md-4 control-label">Nome</label>

						<div class="col-md-6">
							<input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>

							@if ($errors->has('nome'))
							<span class="help-block">
								<strong>{{ $errors->first('nome') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
						<label for="descricao" class="col-md-4 control-label">Descrição</label>

						<div class="col-md-6">
							<input id="descricao" type="text" class="form-control" name="descricao" value="{{ old('descricao') }}" required autofocus>

							@if ($errors->has('desc'))
							<span class="help-block">
								<strong>{{ $errors->first('descricao') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
						<label for="imagem" class="col-md-4 control-label">Imagem</label>

						<div class="col-md-6">
							<input id="imagem" type="file" class="form-control" name="imagem" value="{{ old('imagem') }}" required>

							@if ($errors->has('imagem'))
							<span class="help-block">
								<strong>{{ $errors->first('imagem') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Register
							</button>
						</div>
					</div>
				</form>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
@stop
