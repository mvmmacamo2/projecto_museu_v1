@extends('layouts.master')

@section('title')
Autenticação
@stop

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <span class="anchor" id="formLogin"></span>

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">

                            {{-- action="{{ route('/escola/login') }}" --}}
                            <form class="form-horizontal" method="POST"  action="{{ url('/escola/login') }}" >
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-6 control-label">Email Da Escola</label>

                                    <div class="col-md-12">
                                        <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('senha') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Senha</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="senha" required>

                                        @if ($errors->has('senha'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('senha') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Memorizar Senha
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-common btn-md mt-20">
                                            Entrar
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Esqueceu o Password?
                                        </a>
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
