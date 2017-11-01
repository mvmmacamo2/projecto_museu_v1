@extends('layouts.master')

@section('title')
Registar Organização
@stop

@section('content')
<div class="container py-5">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10 mx-auto">
					<span class="anchor" id="formLogin"></span>

					<!-- form card login -->
					<div class="card rounded-0">
						<div class="card-header">
							<h3 class="mb-0">Registo</h3>
						</div>
						<div class="card-body">
							<form>
								<div class="row">

									<div class="col-md-6 mb-3">
										<label for="validationServer01">Nome Da Organização:</label>
										<input id="name" type="text" class="form-control is-valid" name="name" value="{{ old('name') }}" required autofocus>
									</div>

									<div class="col-md-6 mb-3 ">
										<label for="endereco">Endereço:</label>
										<input type="text" class="form-control is-valid" id="endereco" value="{{ old('endereco') }}" 		required>
									</div> 
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="validationServer01">Contacto:</label>
										<input id="name" type="text" class="form-control is-valid" name="name" value="{{ old('name') }}" required autofocus>
									</div>

									<div class="col-md-6 mb-3 ">
										<label for="email">Email:</label>
										<input
										id="email" type="email" class="form-control is-valid" name="email" value="{{ old('email') }}" required autofocus>
									</div>
								</div>

								<div class="row">

									<div class="col-md-6 mb-3 ">
										<label for="responsavel">Nome Do Resposável:</label>
										<input type="text" class="form-control is-valid" id="responsavel" value="{{ old('responsavel') }}" required>
									</div>
<!-- 
									<div class="col-md-3 mb-3">
										<label for="validationServer05">Zip</label>
										<input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
									</div> -->

									
								</div>

								<button class="btn btn-primary" type="submit">Registar</button>
							</form>
						</div>
						<!--/card-block-->
					</div>
					<!-- /form card login -->

				</div>


			</div>
			<!--/row-->

		</div>
		<!--/col-->
	</div>
	<!--/row-->
</div>
<!--/container-->
@endsection
