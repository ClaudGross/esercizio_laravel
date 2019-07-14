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
Route::post('/show', 'HomeController@show')->name('show');


// pagina di prova 
Route::get('/demo', function () {
    return view('demo');
});

// pagina esercizio C# 
Route::get('/registro/index', 'RegistroController@index')->name('index');
Route::get('/registro/new', 'RegistroController@new')->name('new_voto');
Route::post('/registro/save', 'RegistroController@save')->name('save');



