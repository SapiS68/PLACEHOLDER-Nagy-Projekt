<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/autocomplete/{substr}', [GameController::class, 'autocomplete']);
Route::middleware('auth:api')->get('/autocomplete', [GameController::class, 'autocomplete']);

Route::middleware('auth:api')->get('/guess', [GameController::class, 'get_attempt_info']);
Route::middleware('auth:api')->post('/guess', [GameController::class, 'guess']);