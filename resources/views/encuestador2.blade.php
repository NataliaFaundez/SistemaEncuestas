   <!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap 3 Admin</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      
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

             <div class="col-sm-9">
                <div class="panel panel-primary">
               
                <div class="panel-body">   
                <form class="form-horizontal" method="POST" action="/encuestador/save">
                    {{ csrf_field() }}
                
                    <div class="control-group">
                           <label for="" >Proyecto</label>                 
                           <select class="form-control" name='proyecto_id' class="col-sm-5">
                                @foreach (App\Proyecto::all() as $proyecto)
                                  <option value="{{ $proyecto->id }}">{{ $proyecto->proyecto }}</option>                               
                                @endforeach
                            </select>
                    </div>

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
                            <input type="text" class="form-control" name="rut" placeholder=" ">
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

                    <div class="control-group">
                        <label for="" >Región</label>                 
                        <select class="form-control" name='region_id' class="col-sm-5">
                            @foreach (App\Region::all() as $region)
                              <option value="{{ $region->id }}">{{ $region->region }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="control-group">
                        <label for="" >Comuna</label>                 
                        <select class="form-control" name='comuna_id' class="col-sm-5">
                            @foreach (App\Comuna::all() as $comuna)
                                <option value="{{ $comuna->id }}">{{ $comuna->comuna }}</option>
                            @endforeach
                        </select>
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