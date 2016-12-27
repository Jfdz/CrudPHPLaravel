<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::resource('persona', 'ControladorPersona');

Route::get('crear', 'ControladorPersona@create');
Route::post('store', 'ControladorPersona@store');
Route::get('show/{id}', 'ControladorPersona@show');
Route::get('editar/{id}','ControladorPersona@edition');
Route::PUT('update/{id}', 'ControladorPersona@update');
Route::get('index', 'ControladorPersona@index');
Route::delete('destroy/{id}','ControladorPersona@destroy');

Route::get('/', 'ControladorPersona@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
