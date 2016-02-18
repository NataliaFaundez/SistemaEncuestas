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
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--<link href="/asset/css/styles.css" rel="stylesheet"> -->

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
		            <a class="navbar-brand" href="/cliente/administrador">Administrador de clientes</a>
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
		                        <li><a href="/cliente/administrador">Volver a inicio</a></li>
		                        <li><a href="/configuracion">Configuracion</a></li>
		                    </ul>
		                   
		                </li>
		                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
		            </ul>
		        </div>
		    </div>
		</div>
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
		                        <li class="active"> <a href="/cliente/proyecto"><i class="glyphicon glyphicon-home"></i> 
		                        	Proyectos</a></li>
		                        <li><a href="/cliente/usuarios"><i class="glyphicon glyphicon-user"></i> 
		                        	Usuarios</a></li>
		                        <li><a href="/cliente/zonaEncuestador"><i class="glyphicon glyphicon-pushpin"></i> 
		                        	Zona de encuestador</a></li>		
		                        <li><a href="/cliente/controlador"><i class="glyphicon glyphicon-phone-alt"></i> 
		                        	Controlador </a></li>	   
		                        <li><a href="/cliente/encuestas"><i class="glyphicon glyphicon-question-sign"></i> 
		                        	Estado encuestas</a></li>
		                        <li><a href="/cliente/add"><i class="glyphicon glyphicon-copy"></i> 
		                        	Encuesta</a></li>	 		                       
		                    </ul>
		                </li>  
		            </ul>
		        </div>
		        <!-- /col-3 -->
		        <div class="col-sm-9">
		            <!-- column 2 -->        
		            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
		            <hr>
<!--
		            
		        </div>
		    </div>
		</div>
-->
		@yield('content')

		<!-- /.modal -->
		<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/asset/js/bootstrap.min.js"></script>
		<script src="/asset/js/scripts.js"></script>
	</body>
</html>