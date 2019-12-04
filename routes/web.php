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

Route::get('/','HomeController@home');//view que mostra a home do site

Route::get('/create','HomeController@create');//view do formulario de cadastro
Route::post('/store','HomeController@store');//salva formulario de cadastro 


Route::get('/login','HomeController@index'); //view da tela de login
Route::post('/login','HomeController@login');//rota para autenticar o login


Route::get('empresa',function() {
    Route::get('/homeEmpresa','EmpresaController@index');
    Route::get('/empresaDoacao','EmpresaController@doacao');
})->middleware('auth');
