<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap 3 Admin</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!--
        <link href="/asset/css/bootstrap.min.css" rel="stylesheet">

        <link href="/asset/bootstrap-switch.css" rel="stylesheet">
        <script src="/asset/jquery.min.js"></script>
        <script src="/asset/bootstrap-switch.js"></script>
        -->

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!--<link href="/asset/css/styles.css" rel="stylesheet">-->
    </head>
    <body>
        <!-- header -->
            @include('menus.menu_principal')
        
            <!-- /container -->
            @if (isset($result))    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- Left column -->
                            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>
                            <hr>
                            <ul class="nav nav-stacked">
                                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Configuracion<span class="glyphicon glyphicon-list"></span></a>
                                    <ul class="nav nav-stacked collapse in" id="userMenu">
                                        <li class="active"> <a href="/cliente/proyecto"><i class="glyphicon glyphicon-home"></i> 
                                            Agregar Zona</a></li>
                                        <li><a href="/cliente/usuarios"><i class="glyphicon glyphicon-envelope"></i> 
                                            Editar encuesta</a></li>                                                                       
                                    </ul>
                                </li>  
                            </ul>
                        </div>
                        <!-- /col-3 -->
                        <div class="col-sm-9">
                            <!-- column 2 -->        
                            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
                            <hr>                            
                        </div>
                    </div>
                </div>

            @endif 
        <!-- /Header -->
        <!-- Main -->

        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-3">
                <!-- Left column -->
                <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

                <hr>

                <ul class="nav nav-stacked">
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Opciones <span class="glyphicon glyphicon-list"></span></a>
                        <ul class="nav nav-stacked collapse in" id="userMenu">
                            <li class="active"> <a href="/controlador/ver"><i class="glyphicon glyphicon-list-alt"></i> 
                                Ver control</a></li>
                            <li><a href="/controlador/ingresar"><i class="glyphicon glyphicon-pencil"></i> 
                                Ingresar control</a></li>                                
                        </ul>
                    </li>  
                </ul>
            </div>
            </div>
        </div>

        <!-- /.modal -->
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="/asset/js/bootstrap.min.js"></script>
        <script src="/asset/js/scripts.js"></script>
    </body>
</html>