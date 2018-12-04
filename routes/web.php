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

Route::get('index', 'IndexController@showIndex');
//Route::get('result','PropiedadesController@showPropiedades');
Route::get('nordelta','NordeltaController@showNordelta');
Route::get('about','NosotrosController@showNosotros');
Route::get('puertos','PuertosController@showPuertos');
Route::get('tasaciones','TasacionesController@showTasaciones');

Route::get('api','ApiController@traerApiCompleta');
Route::get('propiedadesdestacadas','ApiController@propiedadesDestacadas');


Route::get('index','ApiController@propiedadesIndex');
Route::get('propiedades','ApiController@propiedades');

Route::get('result/{pagina}','ApiController@filtrarPropiedades');

Route::get('propiedad/{indice}','ApiController@singleProperty');
