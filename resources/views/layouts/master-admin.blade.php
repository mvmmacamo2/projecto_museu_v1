<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Museu Da Moeda</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/admin/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="/admin/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="/admin/dist/css/skins/_all-skins.min.css">
  	<!-- Morris chart -->
  	<link rel="stylesheet" href="/admin/bower_components/morris.js/morris.css">
  	<!-- jvectormap -->
  	<link rel="stylesheet" href="/admin/bower_components/jvectormap/jquery-jvectormap.css">
  	<!-- Date Picker -->
  	<link rel="stylesheet" href="/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  	<!-- bootstrap wysihtml5 - text editor -->
  	<link rel="stylesheet" href="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>M</b>N</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Museu Nacional</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">

						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							@guest

							@else
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="hidden-xs">{{ Auth::user()->name }}</span>
							</a>
							@endguest
							<ul class="dropdown-menu">
								<!--  -->
								<li class="user-header">

									@guest

									@else
									<img src="/user-upload/{{Auth::user()->foto}}" class="img-circle" alt="">
									<p>
										{{ Auth::user()->name }}
									</p>
									@endguest
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-default btn-flat">Perfile</a>
									</div>
									<div class="pull-right">

										<a class="btn btn-default btn-flat" style="font-size: 12pt; color: #000; " href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										Sair
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header"><i class="fa fa-dashboard"></i> Menu</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-picture-o fa-fw"></i> <span>Exposição</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="/admins/exposicoes/create"><i class="fa fa-plus"></i> Criar Exposição</a></li>
						<li class="active"><a href="/admins/exposicoes"><i class="fa fa-list"></i> Ver Exposição</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-picture-o fa-fw"></i>
						<span>Galeria</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="/admins/galerias/create"><i class="fa fa-plus"></i> Criar Galeria</a></li>
						<li><a href="/admins/galerias/"><i class="fa fa-list"></i> Ver Galeria</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-calendar-o"></i>
						<span>Eventos</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="/admins/eventos/create"><i class="fa fa-plus"></i> Adicionar Eventos</a></li>
						<li><a href="/admins/eventos/"><i class="fa fa-list"></i> Ver Eventos</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-paper-plane-o "></i>
						<span>Pedidos</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="/clientes/create"><i class="fa fa-eye"></i> Novos Pedidos</a></li>
						<li><a href="/clientes/create"><i class="fa fa-eye"></i> Pedidos Respondidos</a></li>
					</ul>
				</li>

				<li class="treeview">
					<a href="#">
						<i class="fa fa-eye"></i>
						<span>Serviços</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="/admins/pedidos/visitaguiadaescolar"><i class="fa fa-list"></i> Visitas Guiadas Escolares</a></li>
						<li><a href="/admins/pedidos/visitaguiadasingular"><i class="fa fa-list"></i> Visitas Guiadas Singulares</a></li>
						<li><a href="/admins/pedidos/prenda"><i class="fa fa-list"></i> Renda do Pátio</a></li>
					</ul>
				</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-eye"></i>
                        <span>Escola</span>
                        <span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admins/escolas"><i class="fa fa-list"></i> Todas as Escolas</a></li>
                        <li><a href="/admins/escolas/create"><i class="fa fa-plus"></i> Adicionar Escola</a></li>
                    </ul>
                </li>

				<br>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>Usuários</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="/admins/usuarios/create"><i class="fa fa-plus"></i> Adicionar Usuários</a></li>
						<li><a href="/admins/usuarios/"><i class="fa fa-list"></i> Ver Lista</a></li>
						{{-- <li><a href="/admins/usuarios"><i class="fa fa-list"></i> Permissão</a></li> --}}
					</ul>
				</li>


				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>Estatisticas</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="/admins/estatistica"><i class="fa fa-plus"></i> Gerais</a></li>
						<li><a href="/admins/usuarios/"><i class="fa fa-list"></i> Ver Lista</a></li>
						{{-- <li><a href="/admins/usuarios"><i class="fa fa-list"></i> Permissão</a></li> --}}
					</ul>
					
				</li>


			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Painel Administrativo
			</h1>
			<ol class="breadcrumb">
				<li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			@yield('content')
		</section>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Painel Admin <a href="/home">Museu Nacional da Moeda</a>.</strong>

</footer>
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/admin/bower_components/raphael/raphael.min.js"></script>
<script src="/admin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/bower_components/moment/min/moment.min.js"></script>
<script src="/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">

@yield('js')

</script>
	@yield('js-script')
</body>
</html>
