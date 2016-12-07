<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::auth();

Route::resource('admin/recomendaciones', 'AdminRecomendacionesController');
Route::resource('admin/users', 'UserController');
Route::resource('api/recomendaciones', 'ApiRecomendacionesController');
Route::resource('admin/organizaciones', 'OrganizacionesController');
Route::resource('admin/instituciones', 'AdminInstitucionController');

Route::get('recomendaciones/califecaciones/{id}', 'CalificacionController@califica');
Route::resource('recomendaciones/califecaciones', 'CalificacionController');


Route::get('/home', 'HomeController@index');
Route::get('recomendaciones', 'RecomendationController@index');
Route::get('recomendaciones/show/{id}', 'RecomendationController@show');
Route::get('api/paises/listado/{name?}', 'CountryController@listado');
Route::get('instituciones', 'PagesController@instituciones');
Route::get('organizaciones', 'PagesController@organizaciones');


Route::post('recomendaciones', 'RecomendationController@search');
Route::post('admin/recomendaciones', 'AdminRecomendacionesController@search');
Route::post('admin/users', 'UserController@search');
Route::post('admin/users', 'OrganizacionesController@search');

