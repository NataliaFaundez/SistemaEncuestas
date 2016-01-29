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

Route::get(" ", function () {
    return view('/sistema/layout');
});

Route::get("/sistema/clientes", function () {
    return view('/sistema/clientes');
});

Route::get("/sistema/usuarios", function () {
    return view('/sistema/usuarios');
});


Route::get("/cliente/administrador", function () {
    return view('/cliente/layout');
});

Route::get("/cliente/proyecto", function () {
    return view('/cliente/proyecto');
});

Route::get("/cliente/usuarios", function () {
    return view('/cliente/usuarios');
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

Route::get("/controlador/ver", function () {

    return view('controlador1');
});

Route::get("/controlador/ingresar", function () {

    return view('controlador2');
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

Route::group(['middleware' => ['web']], function () {
    //
});
