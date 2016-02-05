@extends('cliente.layout_configuracion')
@section('content')

	<div class="row">
		<div class="col-md-5">
		<!--tabs-->
			<div class="panel">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
						<h4>Cambiar Nombre</h4>
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
</div>
@endsection
		

