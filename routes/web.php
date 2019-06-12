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

/**
 * Client routes
 */
Route::post('/clients', 'ClientController@store');

Route::get('/clients', 'ClientController@index')->name('client_index');

Route::get('/clients/create', 'ClientController@create')->name('client_create');

Route::get('/clients/delete', 'ClientController@delete')->name('client_delete');

Route::get('/clients/edit', 'ClientController@edit')->name('client_edit');
