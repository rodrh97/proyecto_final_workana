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

use App\User;

// Principal
Route::get('/', function () {
    return view('inicio');
});

//Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/inicio', function () {
    return view('inicio');
});
//Route::resource(); // comenté esto, marcaba error
// Como Freelance 

//Route::get('/buscarProyectos', 'PagesController@buscarTrabajo');  // (Por defecto al iniciar sesión)
Route::get('/buscarProyectos', 'Proyectos@indexProyectos');  // (Por defecto al iniciar sesión)
Route::get('/perfilComoFreelance', 'PagesController@perfilComoFreelance');
Route::get('/notificaciones', 'PropuestaController@consultarPropuestas');
Route::get('/proyectosComoFreelance', 'Proyectos@proyectosUsuario');
Route::get('/proyectosConMisHabilidades', 'PagesController@proyectosConMisHabilidades');
Route::get('/realizarPropuesta/{id_usuario}/{id_proyecto}', 'PropuestaController@fillForm'); // ir al form
Route::post('/realizarPropuesta/store', 'PropuestaController@store'); // Guardar propuesta

Route::get('/mejorarPropuesta', 'PagesController@mejorarPropuesta');


// Como cliente

Route::get('/perfilComoCliente', 'PagesController@perfilComoCliente');

Route::get('/crearProyecto', 'CategoriasController@index');
Route::post('/crearProyecto/create', 'Proyectos@store');
Route::get('/proyectosComoCliente', 'Proyectos@index');

Route::get('/verPropuestas', 'PagesController@verPropuestas');
Route::get('/freelancersContratados', 'PagesController@freelancersContratados');
Route::post('/proyecto/cancelar/{id}', 'Proyectos@cancelar'); // cancelar proyecto


// Configuración, menu, registro, inicio y editar perfil y ver perfil
Route::get('/configuracion', 'PagesController@configuracion');
Route::get('/menu', 'PagesController@menu');
Route::get('/registro', 'PagesController@registro');
Route::get('/iniciarSesion', 'PagesController@iniciarSesion');
Route::get('/editarPerfil', 'PagesController@editarPerfil');

Route::get('verPerfil', 'UsuariosController@verPerfil');

//
Route::post('/buscarProyectos','Auth\LoginController@login')->name('login');

Route::post('/registro','UsuariosController@registrarUsuario');
//Route::post('/registro','Auth\RegisterController@create');

Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::patch('/editarPerfil/{usuario}','UsuariosController@editarUsuario');
Route::patch('/configuracion/{usuario}','UsuariosController@configurarUsuario');




