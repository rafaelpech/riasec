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
	return view('modulodos.riasec.resultados');
});

Route::get('/questions', 'RiasecContro	ller@list');

Route::resource('Registro','UsuarioController');

Route::resource('RegistroUniversidad','UniversidadController');

Route::get('/Usuario/EditarPerfil', function(){
	return view('modulouno.Usuario.editarperfil');
});

Route::get('/login', function(){
	return view('modulouno.Usuario.login');
});