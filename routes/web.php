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

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function() {
    //
    Route::get('/users/api', function(){
        return view('users.token');
    })->name('users.api');
    
Route::resource('cars', 'CarController');

// Route::resource('driverLogs', 'Driver-LogController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');


Route::resource('trips', 'TripController');

Route::resource('maintainances', 'MaintainanceController');

Route::resource('fuelPurchases', 'Fuel_PurchaseController');

Route::resource('incidentReports', 'Incident_ReportController');
});



Route::resource('fuelPurchases', 'Fuel_PurchaseController');

Route::resource('workshops', 'WorkshopController');