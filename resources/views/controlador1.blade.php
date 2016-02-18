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
            @include('menus.menu_principal')
           <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <!-- Left column -->
                    <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

                    <hr>

                    <ul class="nav nav-stacked">
                        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Opciones <span class="glyphicon glyphicon-list"></span></a>
                            <ul class="nav nav-stacked collapse in" id="userMenu">
                                <li class="active"> <a href="/controlador/ver"><i class="glyphicon glyphicon-home"></i> 
                                    Ver control</a></li>
                                <li><a href="/controlador/ingresar"><i class="glyphicon glyphicon-envelope"></i> 
                                    Ingresar control</a></li>                                
                            </ul>
                        </li>  
                    </ul>
                </div>

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
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Aphix</td>
                                        <td>Práctica</td>
                                        <td> boton si/no </td>
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



        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="/asset/js/bootstrap.min.js"></script>
        <script src="/asset/js/scripts.js"></script>