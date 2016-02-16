<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });


});

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get("test", function() {
       $user = Auth::user();
       if ($user->controlador) {
           return 'soy controlador';
       } 
       return 'no soy controlador';
    });


    Route::get('/home', 'HomeController@index');


    Route::get("/sistema/usuarios", function () {
        return view('/sistema/usuarios');
    });


    Route::get("/cliente/administrador", function () {
        return view('/cliente/layout');
    });


    Route::get("/cliente/zonaEncuestador", function () {
        return view('/cliente/zonaEncuestador');
    });

    Route::get("/cliente/controlador", function () {
        return view('/cliente/controlador');
    });

    Route::get("/cliente/encuestas", function () {
        return view('/cliente/encuestas');
    });

    Route::get("/cliente/editar", function () {
        return view('/cliente/editar/layout');
    });

    Route::get("/cliente/add", function () {
        return view('/cliente/add');
    });

    Route::get("/encuestador", function () {
        return view('encuestador');
    });

    Route::get("/encuestador1", function () {
        return view('encuestador1');
    });

    Route::get("/encuestador2", function () {
        return view('encuestador2');
    });

    Route::get("/controlador", function () {
        return view('controlador');
    });
    Route::get("/cliente/usuarios", function () {
        return view('/cliente/usuarios');
    });

    Route::get("/controlador/ver", function () {
        return view('controlador1');
    });

    Route::get("/controlador/ingresar", function () {
        return view('controlador2');
    });

    Route::get("/config/encuesta", function () {
        return view('/configuracion/encuesta');
    });

    Route::get("/configuracion", function () {
        return view('/cliente/layout_configuracion');
    });


// configuracion de la region
    Route::get("/config/region", 'RegionController@Index');
    Route::post("/config/region/save", 'RegionController@PostGuardar');
    Route::get("/config/region/eliminar/{id}", 'RegionController@Eliminar');
    Route::get("/config/region/editar/{id}", 'RegionController@Editar');
    Route::post("/config/region/editar/{id}", 'RegionController@EditarSave');

    //Route::get("/config/comuna", function () {
      //return view('/configuracion/comuna', ["regiones"=> App\Region::all()]);
    //});
    //configuracion de la comuna
    Route::get("/config/comuna", 'ComunaController@Index');
    Route::post("/config/comuna/save", 'ComunaController@PostGuardar');
    Route::get("/config/comuna/eliminar/{id}", 'ComunaController@Eliminar');
    Route::get("/config/comuna/editar/{id}", 'ComunaController@Editar');
    Route::post("/config/comuna/editar/{id}", 'ComunaController@EditarSave');

//configuracion de proyecto
    Route::get("/cliente/proyecto", 'ProyectoController@Index');
    Route::post("/cliente/proyecto/save", 'ProyectoController@PostGuardar');
    Route::get("/cliente/proyecto/eliminar/{id}", 'ProyectoController@Eliminar');
    Route::get("/cliente/proyecto/editar/{id}", 'ProyectoController@Editar');
    Route::post("/cliente/proyecto/editar/{id}", 'ProyectoController@EditarSave');

//configuracion de clientes
    
    Route::get("/sistema/clientes", 'ClienteController@Index');
    Route::post("/sistema/clientes/save", 'ClienteController@PostGuardar');
    Route::get("//sistema/clientes/eliminar/{id}", 'ClienteController@Eliminar');
    Route::get("/sistema/clientes/editar/{id}", 'ClienteController@Editar');
    Route::post("/sistema/clientes/editar/{id}", 'ClienteController@EditarSave');


});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

