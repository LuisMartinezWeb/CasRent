<?php

use Illuminate\Support\Facades\Route;

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





// Route::post('Contactanos','MessagesController@store')->name('messages.store');
//Route::resource('/contactos', 'MessagesController');


Route::get('/', 'InicioController')->name('inicio');
Route::resource("casas","ControllerVistaCasas");
Route::resource("contacto","ContactoController");

Route::get('/welcome', function () {
    //return view('welcome');
    return view('welcome');
});


//rutas de administrador
Auth::routes();

Route::get('dashboard', 'HomeController@index')->name('dashboard');

Route::view('error404','layouts/error404')->name('error404');

Route::resource("propiedades","PropiedadesController");
Route::resource("imgpropiedades","ImagenPropiedadController");

//Ruta del perfil
Route::get('perfil', 'UserController@perfil')
->Middleware('auth');
Route::post('perfil', 'UserController@update_avatar');
Route::get('profile', 'UserController@profile')
->Middleware('auth');
Route::post('profile', 'UserController@update');




Route::get('contacto', 'UserController@contacto')->name('contacto');


//rutas de ñapi

// require __DIR__ . "/rutasluis_api.php";

require __DIR__ . "/rutas_api.php";