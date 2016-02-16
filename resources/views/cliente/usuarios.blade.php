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
					<h4>Agregar Usuario</h4>
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
							<label>Clave</label>
							<div class="controls">
								<input type="text" class="form-control" placeholder="Enter Name">
							</div>
						</div>
						<div class="control-group">
							<label>Correo</label>
							<div class="controls">
								<input type="text" class="form-control" placeholder="Enter Name">
							</div>
						</div>
						<div class="control-group">
						<label>Proyecto</label>
						<div class="controls">
						<select class="form-control">
						<option>practica</option>
						<option>otros</option>
						</select>
						</div>
						</div>
						<div class="control-group">
						<label>Rol</label>
						<div class="controls">
						<select class="form-control">
						<option>Administrador</option>
						<option>Encuestador</option>
						<option>Controlador</option>
						</select>
						</div>
						</div>
						<BR>
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
			<div class="input-group">
		      <input type="text" class="form-control" placeholder="Search for...">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Go!</button>
		      </span>
		    </div><!-- /input-group -->
			<BR>  
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
							<th>Nombre</th>
							<th>Proyecto</th>
							<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>##</td>
							<td> ##</td>
							<td>
							<a class="btn btn-success" href="#">
								Mostrar
							<span class="glyphicon glyphicon-eye-open"></span>
							</a>
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