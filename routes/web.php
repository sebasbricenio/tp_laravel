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




Route::get('perfil','IndexController@perfil');

Route::get('index','IndexController@index');
//Route::get('registro','IndexController@registro');
//Route::post('registro', 'IndexController@crear');
//Route::get('register','RegisterController@validator');
//Route::post('register', 'RegisterController@create');
Route::get('preguntas_frecuentes','IndexController@preguntas_frecuentes');

Route::get('publicar','PublicarController@publicar');


Route::get('cambio_contrasenia','IndexController@cambio_contrasenia');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
