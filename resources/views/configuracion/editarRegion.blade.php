@extends('cliente.layout_configuracion')
@section('content')

<div class="row">
	<!-- center left-->
	<div class="col-md-5">
		<!--tabs-->
		<form class="form-horizontal" action="/config/region/editar/{{$region->id}}" method="POST">
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
								<input type="text" class="form-control" name="region" value="{{$region->region}}">
							</div>	
						</div>	

						<br>

						<div class="control-group">						
							<div class="controls">
								<button type="submit" class="btn btn-primary">
								Guardar
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
	
</div>
@endsection