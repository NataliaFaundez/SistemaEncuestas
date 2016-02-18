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
                                   echo '<li><a href="/encuestador">Encuesador</a></li>';
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
                <div class="col-sm-3">
                    <!-- Left column -->
                    <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

                    <hr>

                    <ul class="nav nav-stacked">
                        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Opciones <span class="glyphicon glyphicon-list"></span></a>
                            <ul class="nav nav-stacked collapse in" id="userMenu">
                                <li class="active"> <a href="/encuestador1"><i class="glyphicon glyphicon-home"></i> 
                                    Ver encuesta</a></li>
                                <li><a href="/encuestador2"><i class="glyphicon glyphicon-pencil"></i> 
                                    Ingresar encuesta</a></li>                                
                            </ul>
                        </li>  
                    </ul>
                </div>

             <div class="col-sm-9">
                <div class="panel panel-primary">
               
                <div class="panel-body">   
                <form class="form-horizontal" method="POST" action="/encuestas/addsave">
                    {{ csrf_field() }}
                
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Folio</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="folio_a" placeholder="ingrese nº de folio ">
                        </div> 
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="folio_b" placeholder=" ">
                        </div>                
                    </div>
                  
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Rut Encuestador</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="rut_encuestador" placeholder=" ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Región</label>
                        <div class="col-sm-5">                          
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
                    </div>


                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Direccion</label>
                        <div class="col-sm-5">
                            <input type="text" name="direccion"class="form-control" placeholder=" ">
                            <span class="help-block">TODO CON MAYUSCULAS</span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Numero</label>
                        <div class="col-sm-5">
                          <input type="text" name="numero" class="form-control"  placeholder=" ">
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Block</label>
                        <div class="col-sm-5">
                            <input type="text" name="block" class="form-control" placeholder=" ">
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Depto/Casa</label>
                        <div class="col-sm-5">
                            <input type="text" name="departamento" class="form-control" placeholder=" ">
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Nº de telefono</label>
                        <div class="col-sm-5">
                            <input type="text" name="telefono" class="form-control" placeholder=" ">
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Celular</label>
                        <div class="col-sm-5">
                          <input type="text" name="celular" class="form-control" placeholder=" ">
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Contacto1</label>
                        <div class="col-sm-5">
                          <input type="text" name="contacto1" class="form-control" placeholder="Ingrese Nombre ">
                          <span class="help-block">TODO CON MAYUSCULAS</span>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Contacto2</label>
                        <div class="col-sm-5">
                          <input type="text" name="contacto2" class="form-control" placeholder="Ingrese Nombre ">
                          <span class="help-block">TODO CON MAYUSCULAS</span>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Ingreso Familiar</label>
                        <div class="col-sm-5">
                            <select class="form-control" name='ingreso' >
                                <option value="ingreso1">menor a 300.000</option>
                                <option value="ingreso2">entre 300.000y 500.000</option>
                                <option value="ingreso3">entre 500.000 y 700.000</option>
                                <option value="ingreso4">entre 700.000 y 900.000</option>
                                <option value="ingreso5">sobre 900.000</option>
                            </select>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Vehiculos</label>
                            <div class="col-sm-5">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="automovil"> automovil
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="camioneta"> camioneta
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="moto"> moto
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="bicicleta"> bicicleta
                            </label>     
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox3" value="ninguno"> ninguno
                            </label>              
                        </div>
                     </div>
                     

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">Observacion</label>
                        <div class="col-sm-5">
                          <input type="text" name="observacion" class="form-control" placeholder=" ">
                          <span class="help-block">TODO CON MAYUSCULAS</span>
                        </div>
                    </div>
                    <BR>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-primary btn-lg">Ingresar Encuesta</button>
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
            </div>
                 </div>
            </div>

            <!-- script references -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <script src="/asset/js/bootstrap.min.js"></script>
            <script src="/asset/js/scripts.js"></script>