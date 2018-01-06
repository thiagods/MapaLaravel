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

Route::get("/", "PontosController@index");
Route::get("/cadastrar", "PontosController@index");
Route::get("/visualizar", "VisualizaController@index");
Route::post("/enviar", "PontosController@salvar");
