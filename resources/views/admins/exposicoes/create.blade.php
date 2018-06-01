@extends('layouts.master-admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">Criar Exposição</div>

				<div class="panel-body">


					<form action="/admins/exposicoes/" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}


						<input name="estado" type="hidden" value="off" class="form-control pull-right" id="estado">

						{{-- <input name="id_usuario" type="hidden" value="{{Auth::user()->id}}" class="form-control pull-right" id="id_usuario"> --}}

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Nome:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nome" type="text" class="form-control pull-right" id="nome">
									</div>
									<!-- /.input group -->
								</div>
							</div>

							<!-- /.col-lg-6 -->
							<div class="col-lg-6">
								<div class="form-group">
									<label>Descrição:</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="descricao" type="text" class="form-control pull-right" id="descricao">
									</div>
									<!-- /.input group -->
								</div>
							</div>


						</div>
						<!-- /.row -->

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Imegem:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa  fa-ellipsis-h"></i>
										</div>
										<input class="form-control" type="file" name="imagem" id="imagem">
									</div>
									<!-- /.input group -->
								</div>
							</div>
							
						</div>
						<!-- /.row -->


						<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Gravar
						</button>
					</form>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
