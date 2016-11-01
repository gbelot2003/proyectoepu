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

Route::get('/home', 'HomeController@index');
Route::get('api/paises/listado/{name?}', 'CountryController@listado');

