@extends('cliente.layout')
@section('content')

<div class="row">
	<!-- center left-->
	<div class="col-md-5">
		<!--tabs-->
		<div class="panel">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
					<h4>Editar Comuna</h4>
					</div>
				</div>
				<div class="panel-body">
					<form class="form form-vertical">
						
						<div class="control-group">
							<label>Agregar comuna</label>						
							<div class="controls">
								<input type="text" class="form-control" placeholder="Enter Name">
							</div>	
						</div>					
						
						<div class="control-group">
						 <label for="" >Región</label>                 
                            <select class="form-control" name='region'class="col-sm-5">
                                <option value='1'>I.Tarapacá</option>
                                <option value='2'>II.Antofagasta</option>
                                <option value='3'>III.Atacama</option>
                                <option value='4'>IV.Coquimbo</option>
                                <option value='5'>V.Valparaiso</option>
                                <option value='13' selected="selected">RM.Metropolitana de Santiago</option>
                                <option value='6'>VI.O'Higgins</option>
                                <option value='7'>VII.Maule</option>
                                <option value='8'>VIII.Bío-Bío</option>
                                <option value='9'>IX.La Araucanía</option>
                                <option value='10'>X.Los Lagos</option>
                                <option value='11'>XI.Aysén</option>
                                <option value='12'>XII.Magallanes</option>
                                <option value='14'>VIV.Los Ríos</option>
                                <option value='15'>XV.Arica y Parinacota</option>
                            </select>
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
		<hr>  

		<div class="panel">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
					<h4>Editar Region</h4>
					</div>
				</div>
				<div class="panel-body">
					<form class="form form-vertical">
						
						<div class="control-group">
							<label>Agregar Region</label>						
							<div class="controls">
								<input type="text" class="form-control" placeholder="Enter Name">
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
							<th>Comuna</th>
							<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>Metropolitana</td>
							<td>Stgo centro</td>
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