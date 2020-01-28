<?php

use App\Models\Car;
use App\Models\Trip;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    //  $car=Car::where('id',user()->car_id)->get();
   
    $car_id= $request->user()->car_id;
    $current_user_id= $request->user()->id;
   
    $trip_id=Trip::where('user_id', $current_user_id)->latest()->first();
    $car=Car::where('id',$car_id)->get();
    $user=$request->user();
    return Response::json(array(
        'user' => $user,
        'car' => $car,
        '$trip_id'=>$trip_id,
    ));
});

Route::middleware('auth:api')->get('/users','\App\Http\Controllers\UserController@index');
Route::middleware('auth:api')->post('/user/store','\App\Http\Controllers\UserController@store');
Route::middleware('auth:api')->post('/trip/start','\App\Http\Controllers\TripController@store');
Route::middleware('auth:api')->post('/trip/stop/{trip}','\App\Http\Controllers\TripController@update');
Route::middleware('auth:api')->post('/maintainance','\App\Http\Controllers\MaintainanceController@store');
Route::middleware('auth:api')->post('/fuel-purchase','\App\Http\Controllers\Fuel_PurchaseController@store');
Route::middleware('auth:api')->post('/incident-report','\App\Http\Controllers\Incident_ReportController@store');
Route::middleware('auth:api')->get('/workshop','\App\Http\Controllers\WorkshopController@index');
