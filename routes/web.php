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

Route::get('/', 'IndexController@index');

Route::get('/jednostki_miary', 'UnitController@index');
Route::get('/jednostki_miary/edytuj/{unit_id}', 'UnitController@edit');
Route::post('/jednostki_miary/edytuj/{unit_id}', 'UnitController@update');
Route::get('/jednostki_miary/dodaj', 'UnitController@create');
Route::post('/jednostki_miary/dodaj', 'UnitController@store');

Route::get('/grupy_materialow', 'GroupController@index');
Route::get('/grupy_materialow/dodaj', 'GroupController@create');
Route::post('/grupy_materialow/dodaj', 'GroupController@store');
Route::get('/grupy_materialow/edytuj/{group_id}', 'GroupController@edit');
Route::post('/grupy_materialow/edytuj/{group_id}', 'GroupController@update');

Route::get('/materialy', 'MaterialController@index');
Route::get('/materialy/edytuj/{material_id}', 'MaterialController@edit');
Route::post('/materialy/edytuj/{material_id}', 'MaterialController@update');
Route::get('/materialy/dodaj', 'MaterialController@create');
Route::post('/materialy/dodaj', 'MaterialController@store');
