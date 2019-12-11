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






    Route::get('/empresaHome','EmpresaController@index'); //rota da home da empresa apos logado
    Route::get('/edit','EmpresaController@edit'); //rota de edição dos dados do usuario
    Route::post('/update','EmpresaController@update'); //rota que atualiza os dados no banco
    Route::post('/storeDoacao','EmpresaController@storeDoacao');
    
