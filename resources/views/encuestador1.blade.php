
@extends('encuestador')

@section('content')

                
   

             <div class="col-sm-9">
                <div class="panel panel-primary">
                    <div class="panel-body">  
                        <div class="panel panel-default">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th>Proyecto</th>
                                        <th>Folio</th>
                                        <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Aphix</td>
                                        <td>Práctica</td>
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
             </div>

@endsection

