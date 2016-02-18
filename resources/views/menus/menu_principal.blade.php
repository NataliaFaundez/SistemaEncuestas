<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php  
              if(isset($rol))
              {
                if ($rol == "admin") {
                   echo '<a class="navbar-brand" href="/cliente/administrador">Administrador</a>';
                }
                if ($rol == "controlador") {
                   echo '<a class="navbar-brand" href="/controlador">Controlador</a>';
                }
                if ($rol == "sistema") {
                   echo '<a class="navbar-brand" href="/sistema">sistema</a>';
                }
                if ($rol == "encuestador") {
                   echo '<a class="navbar-brand" href="/encuestador">encuestador</a>';
                }
              }
            ?> 
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

                <?php  
                  if(isset($rol))
                  {
                    if ($rol == "admin") {
                ?> 
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


                <?php  
                       
                    }
                  }
                ?> 
                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>    