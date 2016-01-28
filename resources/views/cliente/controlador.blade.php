@extends('cliente.layout')

@section('content')

<div class="row">
	<!-- center left-->
	<div class="col-md-6">
		<!--tabs-->
		<div class="panel">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
					<h4>Agregar Controlador</h4>
					</div>
				</div>
				<div class="panel-body">
					<form class="form form-vertical">
						<div class="control-group">
							<label>Nombre</label>
							<div class="controls">
								<input type="text" class="form-control" placeholder="Enter Name">
							</div>
						</div>
						<div class="control-group">
						<label>Rango</label>
							<div class="controls">
								<select class="form-control">
									<option>00.000.000-0  a 01.111.111-1</option>
									<option>otros</option>
								</select>
							</div>
						</div>
							<div class="control-group">						
								<div class="controls">
									<button type="submit" class="btn btn-primary">
									Ingresar
									</button>
								</div>
							</div>
					</form>
				</div>
			<!--/panel content-->
			</div>                       
		</div>
		<hr>                    
	</div>
			<!--/col-->

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
							<th>Nombre</th>
							<th>Rango</th>
							<th>Acciones</th>
							</tr>
						</thead>

						<tbody>
						<tr>
							<td>Pepito</td>
							<td>00.000.000-0  a 01.111.111-1</td>
							<td>
							<a class="btn btn-warning" href="#">
								Editar
							<span class="glyphicon glyphicon-pencil"></span>
							</a>
							<a class="btn btn-danger" href="#">
								Eliminar 
							<span class="glyphicon glyphicon-remove"></span>
							</a>	 			
							</td>										                               
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</div>

@endsection