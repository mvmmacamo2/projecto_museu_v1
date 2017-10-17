@extends('master-admin')

@section('content-admin')
    <div class="">
        <div class="">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Adicionar Exposição</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="/exposicoes" enctype="multipart/form-data">  
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
                </div>
        </div>
    </div>
@endsection
