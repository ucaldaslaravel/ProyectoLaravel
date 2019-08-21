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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('home');


//Ruta CRUD para Clientes
Route::resource('clientes','ClientesController');




Route::get('proveedores', 'ProveedoresController@index')->name('proveedores.index');
Route::get('presentacionesproductos', 'PresentacionesProductosController@index')->name('presentacionesproductos.index');

//Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Ruta CRUD para Personal
Route::resource('personal','PersonalController');
Route::resource('Catalogo','CatalogoProductosController');
Route::resource('productos','ProductosController');



