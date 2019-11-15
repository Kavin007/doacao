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

Route::get('/','HomeController@index');
Route::get('/cadastroEmpresa','HomeController@formEmpresa');
Route::post('/login','HomeController@login');

Route::prefix('empresa')->group(function(){
    Route::get('/','EmpresaController@index');
});
