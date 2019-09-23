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

Route::get('/', function(){
    return view("index");
});

Route::get('/customers', 'CustomersController@create');

Route::post('/customers', 'CustomersController@store');

Route::get('/lightboard', 'CustomersController@index');


Route::delete('delete/{id}', 'CustomersController@destroy');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
 

Route::group(['middleware' => 'auth'], function () {
    Route::get('specialists', 'CustomersController@showSpecialistClients');
});
