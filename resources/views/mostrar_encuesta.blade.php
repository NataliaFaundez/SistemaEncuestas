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
    <tbody>
        @include('menus.menu_principal')
    
        <div class="container"> 
            <div class="row">     
                @include('menus.menu_encuestador')
                <div class="col-sm-9">
                    <div class="panel panel-primary">
                        <div class="panel-body">  
                            {{ csrf_field() }}
                            <dl class="dl-horizontal">
                                <dt>Proyecto</dt>
                                <dd>{{ $encuesta->proyecto->proyecto}}</dd>
                                <dt>Folio</dt>
                                <dd>{{ $encuesta->folio_a."-".$encuesta->folio_b}}</dd>
                                <dt>Rut encuestador</dt>
                                <dd>{{ $encuesta->rut_encuestador}}</dd>
                                <dt>Direccion</dt>
                                <dd>{{ $encuesta->direccion."-".$encuesta-> numero}}</dd>
                                <dt>Numero</dt>
                                <dd>{{ $encuesta->numero}}</dd>
                                <dt>Block</dt>
                                <dd>{{ $encuesta->block}}</dd>
                                <dt>Departamento</dt>
                                <dd>{{ $encuesta->departamento}}</dd>
                                <dt>Region</dt>
                                <dd>{{ $encuesta->comuna->region->region}}</dd>
                                <dt>Comuna</dt>
                                <dd>{{ $encuesta->comuna->comuna}}</dd>
                                <dt>Telefono</dt>
                                <dd>{{ $encuesta->telefono}}</dd>
                                <dt>Celular</dt>
                                <dd>{{ $encuesta->celular}}</dd>
                                <dt>Contacto 1</dt>
                                <dd>{{ $encuesta->contacto1}}</dd>
                                <dt>Contacto 2</dt>
                                <dd>{{ $encuesta->contacto2}}</dd> 
                            </dl>
                        </div>
                    </div>
                </div>
            </div>        
        </div>   
    </tbody>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="/asset/js/bootstrap.min.js"></script>
    <script src="/asset/js/scripts.js"></script>     
</html>