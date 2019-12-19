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


Route::group(['prefix'=>'auth'],function(){
   Route::get('login','AuthController@formLogin')->name('loginForm')->middleware('guest');
   Route::post('login','AuthController@login')->name('login')->middleware('guest');
   Route::post('logout','AuthController@logout')->name('logout');
});

Route::get('dashboard','HomeController@dashboard')->name('dashboard');
Route::get('/','HomeController@home');
Route::get('detalle-inmueble/{id?}','HomeController@detalleInmueble');
Route::get('inmubles-todos','HomeController@listaInmueble');

Route::resource('empleados','UsuarioController');
Route::resource('inmuebles','InmuebleController');

Route::get('inmuebles/caracteristicas/{inmuebleId}','InmuebleController@caracteristicas');
Route::put('inmuebles/caracteristicas/{inmuebleId}','InmuebleController@agregarCaracteristicas');

