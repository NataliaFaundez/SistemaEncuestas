@extends('cliente.layout')

@section('content')

<div class="row">
	<!-- center left-->
	<div class="col-md-6">
		<!--tabs-->
		<form class="form-horizontal" action="/cliente/proyecto/save" method="POST">
		{{ csrf_field() }}     
		<div class="panel">
					<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
					<i class="glyphicon glyphicon-wrench pull-right"></i>
					<h4>Agregar Proyecto</h4>
					</div>
				</div>
				<div class="panel-body">
					<form class="form form-vertical">
						<div class="control-group">
							<label>Proyecto</label>
							<div class="controls">
								<input type="text" class="form-control" name="proyecto" placeholder="Enter Name">
							</div>
						</div>
						<div class="control-group">
						 <label for="" >Clientes</label>                 
                            <select class="form-control" name='cliente_id' class="col-sm-5">
                                @foreach ($clientes as $cliente)
                                  <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                               
		               			 @endforeach
                            </select>
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
							<th>Proyecto</th>							
							<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($proyectos as $proyecto)
						<tr>							
	                        <td> {{ $proyecto -> proyecto }} </td>            
							
							<td>
							<a class="btn btn-warning" href="/cliente/proyecto/editar/{{ $proyecto -> id}}">
								Editar
							<span class="glyphicon glyphicon-pencil"></span>
							</a>
							<a class="btn btn-danger" href="/cliente/proyecto/eliminar/{{ $proyecto -> id}}">
								Eliminar 
							<span class="glyphicon glyphicon-remove"></span>
							</a>	 			
							</td>										                               
						</tr>
		                @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
</div>
@endsection