<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/riasec', function () {
    return view('modulodos.riasec.test');
});

Route::get('/results', function() {
	return view('modulodos.riasec.result');
});

Route::get('/questions', 'RiasecController@list');

Route::resource('Registro','UsuarioController');

Route::resource('RegistroUniversidad','UniversidadController');

//ruta para acceder a la lista de resultados pasando como parametro el codigo (ej: 'res')
//Route::get('/resultado/{codigo}', 'ResultadoController@resultado');
Route::get('/resultado/{codigo}', 'ResultadoController@listado')->name('listado');
//ruta que ejecuta el metodo resulAlter del controlador ResultadoController
//encargado de general las alternativas del codigo principal
Route::get('/resultado/alternativas/{codigo}', 'ResultadoController@resultAlter')->name('alternativas');    

Route::get('/resultado/vermas/{codigo}/{descripcion}', 'ResultadoController@resultVermas')->name('vermas');