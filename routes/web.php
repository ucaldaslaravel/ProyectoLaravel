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

Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/home', 'HomeController@index')->name('home');
