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


Route::get('/', 'IndexController@index');
Route::get('/cronometragem', 'CronometragemController@index');
Route::get('/cronometragem/get-tomada-tempo','CronometragemController@getTomadaTempo');
Route::get('/cronometragem/get-elementos','CronometragemController@getElementos');
Route::post('/cronometragem/guardar','CronometragemController@guardar');

//CRUD's 
Route::resource('operacao', 'OperacaoController');
Route::resource('usuario', 'UsuarioController');
Route::resource('produto', 'ProdutoController');
Route::resource('sequencia', 'SequenciaController');
Route::resource('tomada-tempo', 'TomadaTempoController');
Route::resource('elemento', 'ElementoController');


