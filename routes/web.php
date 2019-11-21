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


Route::get('/formEmpresa','HomeController@formEmpresa');
Route::get('/login','HomeController@index');
Route::post('/login','HomeController@login');
Route::get('/','HomeController@home');

Route::prefix('empresa')->group(['middleware'=> 'auth'],function(){
    Route::get('/homeEmpresa','EmpresaController@index');
});
