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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/recurso/create', 'ObjetoAprendizagemController@create')->name('recurso.create');
    Route::post('/recurso/store', 'ObjetoAprendizagemController@store')->name('recurso.store');
    Route::get('/recurso/{id}', 'ObjetoAprendizagemController@show')->name('recurso.update');
});
Route::post('pesquisa', 'ObjetoAprendizagemController@pesquisar');
Route::get('objeto-aprendizagem/{id}', 'ObjetoAprendizagemController@mostrar');