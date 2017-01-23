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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

// Middleware para no mostrar ventanas si el usuario esta autenticado.
Route::group(['middleware' => ['guest']], function () {
	Route::resource('login','LogController');
});

Route::get('logout','LogController@logout');

// Middleware para no mostrar ventanas si el usuario no esta autenticado y si tienen prefijo admin.
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
	/* 
	Dashboard
	 */
		// Restfull
		Route::get('/', 'HomeController@index');
	/*
	Users
	 */
		// DataTables Index
		Route::get('/api/users','UserController@datatablesindex');
		// Deleted
		Route::get('/user/deleted','UserController@deleted');
		// DataTables Deleted
		Route::get('/api/users-deleted','UserController@datatablesdeleted');
		// Restore Deleted
		Route::get('/user/{id}/restore','UserController@restore');
		// Restfull
		Route::resource('/user','UserController');
	/*
	Patients
	 */
		// DataTables Index
		Route::get('/api/patients','PatientController@datatablesindex');
		// Restfull
		Route::resource('/patient','PatientController');
});
