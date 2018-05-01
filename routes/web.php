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

Route::get('/credit', function () {
    return view('main.credit');
});

Route::get('/validar/paises', 'Validar@list');

Route::get('/crear', 'Validar@create');

Route::get('/crear2', 'Validar@create2');

Route::get('/crear3', 'Validar@create3');

Route::post('/crear/pais', 'Validar@store');

Route::post('/crear/expresion', 'Validar@storeExpresion');

Route::post('/crear/imagen', 'Validar@storeImage');

Route::get('/validar/{id}', 'Validar@form');

Route::post('/validar/numero/{id}', 'Validar@verification');

Route::get('/editar/{id}', 'Validar@edit');

Route::get('/eliminar/{id}', 'Validar@delete');

Route::get('/eliminar/expresion/{id}', 'Validar@deleteExpresion');

Route::get('/agregar/{id}', 'Validar@add');

Route::post('/agregar/expresion/{id}', 'Validar@addExpresion');

Route::get('/editar/nombre/{id}', 'Validar@editCountry');

Route::post('/guardar/nombre/{id}', 'Validar@editStore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
