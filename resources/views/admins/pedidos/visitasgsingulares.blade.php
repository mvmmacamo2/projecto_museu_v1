@extends('layouts.master-admin')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
        {{--<div class="alert alert-success alert-dismissible">--}}
            {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="false">&times;</button>--}}
            {{--<h4><i class="icon fa fa-check"></i> Alert!</h4>--}}
            {{--Success alert preview. This alert is dismissable.--}}
        {{--</div>--}}
      <div class="panel-heading">
        Lista de Pedidos
      </div>

      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover table-light table-responsive"
        id="dataTables-example">
        <thead>

          <tr>
            <th>ID</th>
            <th>Nome utilizador</th>
            <th>Email</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Data De Submissão</th>
            <th>Descrição</th>
            <th>Acção</th>
          </tr>

        </thead>

        <tbody>

          @foreach($pedidos as $p)
          <tr class="odd gradeX">
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->email}}</td>

            <td>{{$p->data}}</td>
            <td>{{$p->hora}}</td>
            <td>{{$p->created_at->diffForHumans()}}</td>
            <td>{{$p->descricao}}</td>
            <td>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Descrição Do Pedido</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{$p->descricao}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
              <a href="#">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                  Ver <i class="fa fa-eye"></i>
                </button>
                <!-- Modal -->

              </a>
            </td>

            <td>
              <a href="#">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Responder</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form  method="POST" action="{{URL::to('admins/pedidos/responder') }}" id="formulario">
                          {!! csrf_field() !!}
                            <input type="hidden" name="pedido_id" value="{{ $p->id }}">
                            {{ $p->id }}
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">E-mail:</label>
                            <input type="enabled" class="form-control" id="recipient-name" value="{{ $p->email }}" name="to">
                          </div>
                          <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">

                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Estado do Pedido</label>
                            {{--<input type="enabled" class="form-control" id="recipient-name" value="{{ $p->email }}" name="to">--}}
                            <select name="estado" id="recipient-name" class="form-control">
                              <option>Aceite</option>
                              <option>Negado</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Messagem:</label>
                            <textarea class="form-control" id="message-text" name="descricao"></textarea>
                          </div>
                          <input type="submit" class="btn btn-primary"  data-dismiss="modal" value="Enviar" id="btn_save">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                        {{--<button type="submit" class="btn btn-primary"  data-dismiss="modal">Enviar</button>--}}
                      </div>
                    </div>
                  </div>
                </div>
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


@section('js-script')
    <script src="../../../../public/js/jquery-3.3.1.slim.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $(document).on('click', '#btn_save', function () {
        //     alert('save Data')
        // })
        $(document).on('click', '#formulario', function (event) {
            event.preventDefault();
            var data = $(this).serialize()
            var url = $(this).attr('action')
            var post = $(this).attr('method')
            $.ajax({
                type: post,
                url: url,
                data: data,
                dataType: 'json',
                success: function (data) {
                    console.log('data-save', data)
                    alert(data.message)
                }
            });
        })


        $(document).ready(function () {
            //alert('Miguel')
            $.get("{{URL::to('api-users')}}", function (data) {

                $('#table_users').empty().html(data.users)
                // $.each(data.data, function (i, value) {
                //     var tr = $("<tr/>")
                //
                //     tr.append($("<td/>", {
                //         text: value.name
                //     })).append($("<td/>", {
                //         text: value.email
                //     })).append($("<td/>", {
                //         text: value.endereco
                //     })).append($("<td/>", {
                //         text: value.nivelacesso
                //     })).append($("<td/>", {
                //         html: "<a href='' class='btn btn-link'>Ver</a> <a href='' class='btn btn-link'>Editar</a>"
                //     }))
                //     $('#table_users').append(tr)
                // })

            })
        })
        // $(document).on('click', '#mig', function () {
        //
        // })
    </script>
@endsection