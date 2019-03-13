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
    return view('modulouno.inicio');
});

Route::get('/cerrar', function () {
    Session::flush();
    return redirect('/');
});

Route::resource('riasec', 'RiasecController');

Route::get('/riasec', function () {
    $user = \Session::get('candidate');
    if (isset($user)) {
        if ($user[0]->resultado == null) {
            return view('modulodos.riasec.test');
        } else {
            return redirect('resultado');
        }
    } else {
        return redirect('/');
    }
});

Route::get('/questions', 'RiasecController@list');
//Ruta del Usuario 
Route::resource('Usuario', 'UsuarioController');
//Ruta de la universidad
Route::resource('Universidad', 'UniversidadController');

//ruta para acceder a la lista de resultados pasando como parametro el codigo (ej: 'res')
Route::get('/resultado/{user}/{combination}', 'ResultadoController@list')->name('list');
//ruta que ejecuta el metodo resulAlter del controlador ResultadoController
//encargado de general las alternativas del codigo principal
Route::get('/resultado/alternativas/{clave}/{combination}', 'ResultadoController@alternativeResults')->name('alternatives');


Route::get('/resultado/vermas/{user}/{combination}/{occupation}', 'ResultadoController@resultsDetails')->name('details');

Route::get('/alternativas/{user}/{combination}', 'ResultadoController@listAlternatives');

// Ruta inicial del Test con su descripción.
Route::get('/inicio', function () {
    return view('modulouno.inicio');
});

// Ruta de los formularios de los registros para ambos usuarios.
Route::get('/registro', function () {
    return view('modulouno.registro');
});

// Ruta de los formularios de inicio de sesión para ambos usuarios.
Route::get('/login', function () {
    return view('modulouno.login');
});

// Ruta que muestra la pagina principal de la sesión como aspirante.
Route::get('/usuario/perfil', 'UsuarioController@index')->name('usuarioperfil');
// Ruta que muestra el formulario para editar los datos del usuario aspirante.
Route::get('/usuario/editar', 'UsuarioController@edit');

// Ruta que recibe los datos del inicio de sesión del Usuario.
Route::post('/acceso', 'UsuarioController@login')->name('loginUsuario');

Route::get('/Institucion', 'UniversidadController@index')->name('Institucion');

/*
Ruta que dirige a la vista de ¿Quienes somos? en donde se habla del equipo desarrolador del TEST RIASEC
*/
// Quienes somos
Route::get('/about', function () {
    return view('aboutus');
});
/*
Ruta que dirige a la vista Contacto, que incluye un formulario de quejas y sugerencias
*/
Route::get('/contact', function () {
    return view('contact');
});
/*
Ruta que dirige a la vista de Acerca RIASEC, en ella explicamos en que consiste la metodología RIASEC usada para crear este
examén
*/
Route::get('/aboutriasec', function () {
    return view('aboutriasec');
});

Route::get('/website/{website}', function ($website) {
    $url = $website;
    return Redirect::to("https://" . $url);
})->name('website');

//Ruta que recibe un arreglo y permite subir el avance del usuario.
Route::get('/avanceExamen/{riasec}/{position}', 'RiasecController@update')->name('avanceExamen');

//Ruta que ejecuta el debido método y sirve para registrar el inicio del examen en la bd para que el método update pueda funcionar.
Route::get('/inicioExamen', 'RiasecController@registerInTable')->name('inicioExamen');

// Ruta que retorna los estados
Route::get('/estados', 'EstadoController@index');

// Ruta que retorna las ubicaciones con el id del estado y el municipio
Route::get('/ubicaciones', 'UbicacionController@index');

Route::resource('/carreras', 'CarreraController');

Route::get('/aspirantes', 'UsuarioController@show');
