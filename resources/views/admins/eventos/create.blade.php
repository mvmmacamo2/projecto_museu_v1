@extends('master-admin')

@section('content-admin')
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Adicionar Eventos</h3>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-heading">
				Novo Evento
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="/admins/eventos" enctype="multipart/form-data">  
					{{ csrf_field() }}

					<input type="hidden" name="estado" value="active">



					<div class="form-group{{ $errors->has('publico') ? ' has-error' : '' }}">
						<label for="publico" class="col-md-4 control-label">Público</label>

						<div class="col-md-6">
							<select id="publico" name="publico" class="form-control">
								<option value="Adultos">Adultos</option>
								<option value="Adolescentes">Adolescentes</option>
								<option value="Crianças">Crianças</option>
								<option value="Idosos">Idosos</option>
							</select>

							@if ($errors->has('publico'))
							<span class="help-block">
								<strong>{{ $errors->first('publico') }}</strong>
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


					<div class="form-group{{ $errors->has('data_inicio') ? ' has-error' : '' }}">
						<label for="data" class="col-md-4 control-label">Data</label>

						<div class="col-md-6">
							<input id="data" type="date" class="form-control" name="data" value="{{ old('data') }}" required autofocus>

							@if ($errors->has('data'))
							<span class="help-block">
								<strong>{{ $errors->first('data') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('horas') ? ' has-error' : '' }}">
						<label for="hora" class="col-md-4 control-label">Hora</label>

						<div class="col-md-6">
							<input id="hora" type="time" class="form-control" name="hora" value="{{ old('hora') }}" required autofocus>

							@if ($errors->has('hora'))
							<span class="help-block">
								<strong>{{ $errors->first('hora') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
						<label for="descricao" class="col-md-4 control-label">Descrição</label>

						<div class="col-md-6">
							<textarea id="descricao" class="form-control" name="descricao" value="{{ old('descricao') }}" required autofocus cols="10" rows="6"></textarea>

							@if ($errors->has('descricao'))
							<span class="help-block">
								<strong>{{ $errors->first('descricao') }}</strong>
							</span>
							@endif
						</div>
					</div>


					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Adicionar
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
