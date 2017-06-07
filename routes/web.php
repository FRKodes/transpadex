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

Route::get('/', 'PagesController@index');
Route::get('servicios', 'PagesController@servicios');
Route::get('quienes-somos', 'PagesController@quienes_somos');
Route::get('flotilla', 'PagesController@flotilla');
Route::get('clientes', 'PagesController@clientes');
Route::get('contacto', 'PagesController@contacto');
Route::get('sucursales', 'PagesController@contacto');
Route::post('sendmail', 'PagesController@sendmail');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
	return 'OK!';
});