<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;
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
Route::put('apprentices/{id}', 'APIController@update');




Route::get('/users',[ApiController::class,'users']);
Route::post('/login',[ApiController::class,'login']);
Route::post('/apprentices',[ApiController::class,'apprentices']);
Route::get('/datos',[APIController::class,'datos']);
 


