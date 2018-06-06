@extends('layouts.master-admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">


            <div id="app">

            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="container-fluid">

                    <!-- TABLE: USERS ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Lista de Utilizadores</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Endereco</th>
                                        <th>Nivel Acesso</th>
                                        <th>Popularity</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table_users">
                                  @foreach($usuarios as $u)
                                    <tr>
                                        <td>{{$u->name }}</td>
                                        <td>{{$u->email }}</td>
                                        <td>{{$u->endereco }}</td>
                                        <td>{{$u->nivelacesso }}</td>
                                        <td>{{$u->nivelacesso }}</td>

                                        <td>
                                            <a href="/admins/usuarios/{{ $u->id }}/edit">
                                                <button class="btn btn-success btn-sm">Detalhes</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger btn-sm">Apagar</button>
                                            </a>

                                        </td>
                                        {{--<td><a href="pages/examples/invoice.html">OR9842</a></td>--}}
                                        {{--<td>Call of Duty IV</td>--}}
                                        {{--<td><span class="label label-success">Shipped</span></td>--}}
                                        {{--<td>--}}
                                            {{--<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>--}}
                                        {{--</td>--}}
                                    </tr>

                                     @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.table-responsive -->
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                            <button class="btn btn-sm btn-default btn-flat pull-right" id="a">All</button>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>

                {{--<users></users>--}}
            </div>
            <!-- /.panel-body -->
        </div>
            <button class="btn btn-sm btn-default btn-flat pull-right" id="mig">All</button>

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

        $(document).ready(function () {
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

