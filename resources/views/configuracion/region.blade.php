@extends('cliente.layout_configuracion')
@section('content')

<div class="row">
	<!-- center left-->
	<div class="col-md-5">
		<!--tabs-->
		<form class="form-horizontal" action="/config/region/save" method="POST">
		<div class="panel">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
					<h4>Agregar Region</h4>
					</div>
				</div>
				<div class="panel-body">
					<form class="form form-vertical">
						
						<div class="control-group">
							<label>Agregar Region</label>						
							<div class="controls">
								<input type="text" class="form-control" name="region" placeholder="Enter Name">
							</div>	
						</div>	

						<br>

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
		
	@if ( isset($errors) )
		@if (count($errors) > 0)

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
			    <div class="alert alert-info">
			        <ul>
			            @foreach ($errors as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
		
		    </div>
		</div>
		@endif
	@endif

	</form>	                  
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
							<th>Región</th>
							<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						 @foreach ($regiones as $region)
						<tr>							
	                        <td> {{ $region -> region }} </td>            
							
							<td>
							<a class="btn btn-warning" href="/config/editregion/{{ $region -> id}}">
								Editar
							<span class="glyphicon glyphicon-pencil"></span>
							</a>
							<a class="btn btn-danger" href="/config/region/eliminar/{{ $region -> id}}">
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