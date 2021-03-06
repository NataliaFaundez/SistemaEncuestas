 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap 3 Admin</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--<link href="/asset/css/bootstrap.min.css" rel="stylesheet">

        <link href="/asset/bootstrap-switch.css" rel="stylesheet">
        <script src="/asset/jquery.min.js"></script>
        <script src="/asset/bootstrap-switch.js"></script>-->
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--<link href="/asset/css/styles.css" rel="stylesheet">-->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    </head>
    <body>
        <!-- header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/encuestador">Encuestador</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                            <i class="glyphicon glyphicon-user"></i>
                             Roles 
                             <span class="caret"></span>
                             </a>
                            <ul id="g-account-menu" class="dropdown-menu" role="menu">
                              <?php  
                               $user = Auth::user();
                               if ($user->controlador) {
                                   echo '<li><a href="/controlador">Controlador</a></li>';
                               }
                               if ($user->administrador_sistema) {
                                   echo '<li><a href="/sistema/clientes">Sistema</a></li>';
                               }
                               if ($user->encuestador) {
                                   echo '<li><a href="/encuestador">Encuestador</a></li>';
                               }
                               if ($user->admin) {
                                   echo '<li><a href="/cliente/administrador">Administrador</a></li>';
                               }
                              ?>                               
                            </ul>
                           
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                            <i class="glyphicon glyphicon-user"></i>
                             Admin 
                             <span class="caret"></span>
                             </a>
                            <ul id="g-account-menu" class="dropdown-menu" role="menu">
                                <li><a href="#">Volver a inicio</a></li>
                                <li><a href="#">Configuracion</a></li>
                            </ul>
                           
                        </li>
                        <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>


        
<div class="container-fluid">
    <div class="row">
    @include('menus.menu_encuestador')

        <div class="col-sm-6">
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
                                    <th>Folio</th>
                                    <th>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                 @foreach ($encuestas as $encuesta)
                                <tr>                            
                                  
                                    <td> {{ $encuesta->proyecto->proyecto }} </td>  

                                    <td> {{ $encuesta -> folio_a."-".$encuesta->folio_b }} </td>  
                                    
                                    <td>
                                    <a class="btn btn-success" href="/encuestador/mostrar/{{$encuesta->id}}">
                                        Mostrar
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a class="btn btn-warning" href="/encuestador/editar/{{$encuesta->id}}">
                                        Editar
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a class="btn btn-danger" href="/encuestador/eliminar/{{$encuesta->id}}">
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

    
    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>
    <script src="/asset/js/scripts.js"></script>
</div>



