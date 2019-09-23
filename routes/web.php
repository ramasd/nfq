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

Route::resource('customers', 'CustomersController')->except([
    'create', 'update', 'destroy'
]);
// Route::resource('specialists', 'SpecialistsController');

Route::get('/customer', 'CustomersController@create');

Route::get('/lightboard', 'CustomersController@index');
