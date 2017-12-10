
@extends('layouts.master-admin')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Lista de Usuários
			</div>

			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="row">


					<?php
                                    // use DB;

					$patio =count(DB::table('relatio_pedidos')->where('nomeservico', 'Aluguer Patio')->get());
					$nomepatio=DB::table('relatio_pedidos')->where('nomeservico', 'Aluguer Patio')->get();

					?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Aluguer Patio</span>
								<span class="info-box-number">{{ $patio }}   <small>Pedidos Ja Feitos</small></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Likes</span>
								<span class="info-box-number">41,410</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->

					<!-- fix for small devices only -->
					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Sales</span>
								<span class="info-box-number">760</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">New Members</span>
								<span class="info-box-number">2,000</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
@stop