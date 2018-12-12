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
	//return view('welcome');
    return view('principal');
});

Route::resource('fundacion/ninos','NinosController');
Route::get('ValidateEmail/{email}','RepresentanteController@validateEmail');

Route::post('listado','RepresentanteController@validateEmail'); /**ojo**/

Route::post('fundacion/resultadoConsulta','ConsultaNinosController@store');

Route::resource('fundacion/consultas','ConsultaNinosController');
Route::resource('fundacion/representante','RepresentanteController');
Route::resource('fundacion/medicamento','MedicamentoController');
Route::resource('layouts/contact','ContactController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
