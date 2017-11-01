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

							<form method="POST" action="{{ route('register') }}">
								 {{ csrf_field() }}
								 
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

									<div class="col-md-6 mb-3">
										<label for="password">Password</label>
										<input id="password" type="password" class="form-control is-valid" name="password" required>

										@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>

									<div class="col-md-6 mb-3">
										<label for="password-confirm">Confirm Password</label>
										<input id="password-confirm" type="password" class="form-control is-valid" name="password_confirmation" required>
									</div>

								</div>

								<div class="row">

									<div class="col-md-6 mb-3 ">
										<label for="responsavel">Nome Do Resposável:</label>
										<input type="text" class="form-control is-valid" id="responsavel" value="{{ old('responsavel') }}" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<button type="submit" class="btn btn-common btn-md mt-20">
											Registar
										</button>
									</div>
								</div>
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
