<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Regisztráció */
Route::post('/register', [UserController::class, 'register']);

/* Bejelentkezés */
Route::post('/loginaction', [UserController::class, 'login']);

/* Kijelentkezés */
Route::post('/logout', [UserController::class, 'logout']);

/* Jelszómódosítás */
Route::post('/modifypass', [UserController::class, 'modifyPass']);