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


// Route::get('/', function () {
//     return view('products.index');
// });


// Route::get('/','ProductsController@index');
// Route::get('/products/create','ProductsController@create');

//creacion de todas las rutas para acceder al controlador
Route::resource('products','ProductsController');


// Route::get('/','ProductoController@vista');
