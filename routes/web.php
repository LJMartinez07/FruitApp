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
    return redirect()->route('frutages.index');
});


Auth::routes();
Route::resource('frutages', 'Admin\FrutaController');

Route::resource('categoria', 'Admin\CategoriaController');



