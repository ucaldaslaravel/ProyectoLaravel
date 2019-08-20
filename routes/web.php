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
    return view('welcome');
});

Route::get('Productos', 'ProductosController@index')->name('productos.index');
Route::get('Catalogos,{catalogo}', 'ProductosController@index2')->name('catalogo.index');


Route::get('clientes', 'ClientesController@index')->name('clientes.index');
Route::get('clientes/crear', 'ClientesController@create') 
       ->name('crear-cliente');
Route::post('clientes', 'ClientesController@store')
       ->name('guardar-cliente');
Route::post('clientes', 'ClientesController@update')
       ->name('actualizar-cliente');
       Route::get('clientes/{id}', 'ClientesController@show')
       ->name('buscar-cliente');


Route::get('clientes/{id}/editar', 'ClientesController@edit')
       ->name('editar-cliente');
Route::delete('clientes/{id}', 'ClientesController@destroy')
       ->name('eliminar-cliente');


Route::get('proveedores', 'ProveedoresController@index')->name('proveedores.index');
Route::get('presentacionesproductos', 'PresentacionesProductosController@index')->name('presentacionesproductos.index');


Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/home', 'HomeController@index')->name('home');
