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

Route::get('/', 'CatalogController@getIndex');
Route::get('/catalog', 'CatalogController@getIndex')->name('catalog');
Route::get('/catalog/show/{id}', 'CatalogController@getShow');
Route::get('/catalog/create', 'CatalogController@getCreate')->middleware('auth');
Route::post('/catalog/create', 'CatalogController@postCreate');
Route::get('/catalog/edit/{id}', 'CatalogController@getEdit')->middleware('auth');
Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');
Route::put('/catalog/rent/{id}', 'CatalogController@putRent')->middleware('auth');
Route::put('/catalog/return/{id}', 'CatalogController@putReturn')->middleware('auth');
Route::delete('catalog/delete/{id}', 'CatalogController@deleteMovie')->middleware('auth');

Auth::routes();

Route::get('/home', 'CatalogController@getIndex')->name('home');
