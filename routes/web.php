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

Route::get('/sistema', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('index');
});



Route::get('/altaalum','tab_alumnos@altaalumnos');
Route::POST('/guardalum','tab_alumnos@guardaalumno')->name('guardaalumno');
Route::get('/reportealumnos','tab_alumnos@reportealumnos');

Route::get('/altaemp','tab_empresas@altaempresa');
Route::POST('/guardaemp','tab_empresas@guardaempresa')->name('guardaempresa');
Route::get('/reporteemp','tab_empresas@reporteempresas');

Route::get('/altagen','tab_generaciones@altageneracion');
Route::POST('/guardagen','tab_generaciones@guardageneracion')->name('guardageneracion');
Route::get('/reportegen','tab_generaciones@reportegeneraciones');

Route::get('/altacarr','tab_carreras@altacarreras');
Route::POST('/guardacarr','tab_carreras@guardacarreras')->name('guardacarreras');
Route::get('/reportecarreras','tab_carreras@reportecarreras');