<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/books',[\App\Http\Controllers\API\AddBookController::class,'index']);

Route::post('/create', [App\Http\Controllers\API\AddBookController::class, 'add']);
Route::post('/update/{book}', [App\Http\Controllers\API\AddBookController::class, 'update']);
Route::post('/delete/{book}', [App\Http\Controllers\API\AddBookController::class, 'delete']);

Route::group(['prefix'=>'user'],function (){
   Route::post('/register',[App\Http\Controllers\API\AuthApiController::class,'register']);
    Route::post('/login',[App\Http\Controllers\API\AuthApiController::class,'login']);
});
