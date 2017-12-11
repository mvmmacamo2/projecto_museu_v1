<template>
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
								<th>Order ID</th>
								<th>Item</th>
								<th>Status</th>
								<th>Popularity</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="pages/examples/invoice.html">OR9842</a></td>
								<td>Call of Duty IV</td>
								<td><span class="label label-success">Shipped</span></td>
								<td>
									<div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<!-- /.table-responsive -->
			</div>

			<!-- /.box-body -->
			<div class="box-footer clearfix">
				<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
				<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
			</div>
			<!-- /.box-footer -->
		</div>
		<!-- /.box -->
	</div>
</div>
</template>

<script>
export default {
	data(){
		return{

		}
	},
	created(){
		
	},

	methods:{

	}
}
</script>
