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
		                        <li class="active"> <a href="/sistema/clientes"><i class="glyphicon glyphicon-home"></i> Administrar clientes</a></li>
		                        <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Administrar usuarios </span></a></li>
		                        
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
		            <div class="row">
		                <!-- center left-->
		                <div class="col-md-6">
		                    <!--tabs-->
		                    <div class="panel">
		                         <div class="panel panel-default">
		                        <div class="panel-heading">
		                            <div class="panel-title">
		                                <i class="glyphicon glyphicon-wrench pull-right"></i>
		                                <h4>Agregar Clientes</h4>
		                            </div>
		                        </div>
		                        <div class="panel-body">
		                            <form class="form form-vertical">
		                                <div class="control-group">
		                                    <label>Nombre o Razon Social</label>
		                                    <div class="controls">
		                                        <input type="text" class="form-control" placeholder="Enter Name">
		                                    </div>
		                                </div>
		                                <div class="control-group">
		                                    <label>Rut</label>
		                                    <div class="controls">
		                                        <textarea class="form-control"></textarea>
		                                    </div>
		                                </div>
		                                <!--<div class="control-group">
		                                    <label>Category</label>
		                                    <div class="controls">
		                                        <select class="form-control">
		                                            <option>options</option>
		                                        </select>
		                                    </div>
		                                </div>-->
		                                <div class="control-group">
		                                    <label></label>
		                                    <div class="controls">
		                                        <button type="submit" class="btn btn-primary">
		                                            Ingresar
		                                        </button>
		                                    </div>
		                                </div>
		                            </form>
		                        </div>
		                        <!--/panel content-->
		                    </div>                       
		                    </div>
		                    <hr>                    
		                </div>
		                <!--/col-->
		                <div class="col-md-6">
		                    <div class="panel panel-default">
		                        <div class="table-responsive">
		                        <table class="table table-striped">
		                            <thead>
		                                <tr>
		                                    <th>Nombre o Razon social</th>
		                                    <th>Rut</th>
		                                    <th>Acciones</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <td>Aphix</td>
		                                    <td>11.111.111-1</td>
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
		                                </tr>
		                             </tbody>
		                        </table>
		                    </div>
		                    </div>
		                </div>
		            </div>
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