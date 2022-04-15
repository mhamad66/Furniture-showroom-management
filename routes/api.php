<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\DisplaySampleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// warehouses Api
Route::get('/warehouses/index',[WarehouseController::class,'index']);
Route::get('/warehouses/view/{id}',[WarehouseController::class,'show']);
Route::get('/warehouses/delete/{id}',[WarehouseController::class,'destroy']);
Route::post('/warehouses',[WarehouseController::class,'store']);
Route::post('/warehouses/{id}',[WarehouseController::class,'update']);
//Showrooms Api
Route::get('/Showrooms/index',[ShowroomController::class,'index']);
Route::get('/Showrooms/view/{id}',[ShowroomController::class,'show']);
Route::get('/Showrooms/delete/{id}',[ShowroomController::class,'destroy']);
Route::post('/Showrooms',[ShowroomController::class,'store']);
Route::post('/Showrooms/{id}',[ShowroomController::class,'update']);
//DisplaySample Api
Route::get('/DisplaySamples/index',[DisplaySampleController::class,'index']);
Route::get('/DisplaySamples/view/{id}',[DisplaySampleController::class,'show']);
Route::get('/DisplaySamples/delete/{id}',[DisplaySampleController::class,'destroy']);
Route::post('/DisplaySamples',[DisplaySampleController::class,'store']);
Route::post('/DisplaySamples/{id}',[DisplaySampleController::class,'update']);
