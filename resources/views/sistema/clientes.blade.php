@extends('sistema.layout')

@section('content')


<div class="row">
	<div class="col-md-3 col-md-offset-8">
		<button type="button" class="btn btn-primary btn-lg">Large button</button>
	</div>
	  <div class="col-md-5 col-md-offset-4">
		<table class="table table-bordered">	  
			<thead>
				<tr>
					<th>Nombre o Razon social</th>
					<th>Rut</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
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

@endsection