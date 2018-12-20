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

// Frontpage.
Route::get('logout','LogController@logout');

Route::get('appointment','AppointmentController@create');

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
		// Deleted
		Route::get('/patient/deleted','PatientController@deleted');
		// DataTables Deleted
		Route::get('/api/patients-deleted','PatientController@datatablesdeleted');
		// Restore Deleted
		Route::get('/patient/{id}/restore','PatientController@restore');
		// Restfull
		Route::resource('/patient','PatientController');
	/*
	Consulting Rooms
	 */
		// DataTables Index
		Route::get('/api/consulting-rooms','ConsultingRoomController@datatablesindex');
		// Deleted
		Route::get('/consulting-room/deleted','ConsultingRoomController@deleted');
		// DataTables Deleted
		Route::get('/api/consulting-rooms-deleted','ConsultingRoomController@datatablesdeleted');
		// Restore Deleted
		Route::get('/consulting-room/{id}/restore','ConsultingRoomController@restore');
		// Restfull
		Route::resource('/consulting-room','ConsultingRoomController');
	/*
	Appointments
	 */
		// DataTables Index
		Route::get('/api/appointments','AppointmentController@datatablesindex');
		// Deleted
		Route::get('/appointment/deleted','AppointmentController@deleted');
		// DataTables Deleted
		Route::get('/api/appointments-deleted','AppointmentController@datatablesdeleted');
		// Restore Deleted
		Route::get('/appointment/{id}/restore','AppointmentController@restore');
		// Restfull
		Route::resource('/appointment','AppointmentController');
	/*
	Appointments
	 */
		// Restfull
		Route::resource('/pruebas','PruebasController');
});
