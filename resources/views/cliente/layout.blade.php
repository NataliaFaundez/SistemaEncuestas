<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/asset/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="/asset/css/styles.css" rel="stylesheet">
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
		            <a class="navbar-brand" href="#">Administrador de sistema</a>
		        </div>
		        <div class="navbar-collapse collapse">
		            <ul class="nav navbar-nav navbar-right">
		                <li class="dropdown">
		                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
		                    <i class="glyphicon glyphicon-user"></i>
		                     Admin 
		                     <span class="caret"></span>
		                     </a>
		                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
		                        <li><a href="#">My Profile</a></li>
		                    </ul>
		                </li>
		                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
		            </ul>
		        </div>
		    </div>
		    <!-- /container -->
		</div>
		<!-- /Header -->

		<!-- Main -->
		<div class="container-fluid">
		    <div class="row">
		        <div class="col-sm-3">
		            <!-- Left column -->
		            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

		            <hr>

		            <ul class="nav nav-stacked">
		                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Settings <i class="glyphicon glyphicon-chevron-down"></i></a>
		                    <ul class="nav nav-stacked collapse in" id="userMenu">
		                        <li class="active"> <a href=""><i class="glyphicon glyphicon-home"></i> Proyectos</a></li>
		                        <li><a href=""><i class="glyphicon glyphicon-envelope"></i> 
		                        Usuarios</a></li>
		                        <li><a href=""><i class="glyphicon glyphicon-envelope"></i> 
		                        Zona de encuestador</a></li>		
		                        <li><a href=""><i class="glyphicon glyphicon-envelope"></i> 
		                        Controlador</a></li>	   
		                        <li><a href=""><i class="glyphicon glyphicon-envelope"></i> 
		                        Encuestas y Controles</a></li>	                       
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