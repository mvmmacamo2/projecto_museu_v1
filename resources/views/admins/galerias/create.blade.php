@extends('layouts.master-admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Adicionar Galeria</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Nova Galeria
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="/admins/galerias"  enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <input type="hidden" name="estado" value="Activa">

                    <input type="hidden" name="usuario_id" value="{{Auth()->user()->id}}">

                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Exposição</label>

                        <div class="col-md-6">


                            <select class="form-control" name="exposicao_id">
                                @foreach($exposicoes as $exposicao)
                                <option value="{{$exposicao->id}}">{{$exposicao->nome}}</option>
                                @endforeach

                            </select>

                        </div>

                    </div>


                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Nome Galeria</label>

                        <div class="col-md-6">
                            <input id="nome" type="text" class="form-control" name="nome"
                            value="{{ old('nome') }}"
                            required autofocus>

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
                        <input id="descricao" type="text" class="form-control" name="descricao"
                        value="{{ old('descricao') }}" required autofocus>

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
                    <input id="imagem" type="file" class="form-control" name="imagem"
                    value="{{ old('imagem') }}" required>

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
