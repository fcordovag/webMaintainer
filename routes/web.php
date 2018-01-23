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
Route::get('/','HomeController@index');
Route::get('/register','HomeController@register');
Auth::routes();
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//para el admin existe un middlerwares admin
Route::middleware(['auth','admin'])->group(function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hola', 'HomeController@hola');
Route::namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
	Route::get('/sucursales', 'SucursalController@index');//Listado de Sucursales
	Route::get('/createSucursal', 'SucursalController@create');//Listado de Sucursales
	Route::post('/sucursales', 'SucursalController@store');//ruta para crear una sucursal
	Route::delete('/deleteSucursal/{id}','SucursalController@delete');
	Route::get('/sucursal/{id}/edit','SucursalController@edit');
	Route::post('/sucursal/{id}/edit','SucursalController@update');
	Route::get('/trabajadores', 'WorkController@index');
	});
});
