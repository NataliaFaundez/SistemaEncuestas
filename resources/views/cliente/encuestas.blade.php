@extends('cliente.layout')

@section('content')

<div class="row">
	<!-- center left-->	
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
							<th>Folio</th>
							<th>Estado</th>
							<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>12343-3</td>
							<td>
								<div class="control-group">
							<div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-on" style="width: 106px;"><div class="bootstrap-switch-container" style="width: 156px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 52px;">ON</span><span class="bootstrap-switch-label" style="width: 52px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 52px;">OFF</span><input type="checkbox" checked=""></div></div>
						</div>
							</td>
							<td>
							<a class="btn btn-danger" href="#">
								Ver 
							<span class="glyphicon glyphicon-remove"></span>
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