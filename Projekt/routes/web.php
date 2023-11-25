<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
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
    return view('register');
})->name('index');
Route::get('/login', function() {
    return view('login'); // később oldal létrehozása
})->name('login');

/*
 * POST REQUEST-EK
 */

/* Regisztráció */
Route::post('/register', [UserController::class, 'register'])->name('register');

/* Bejelentkezés */
Route::post('/loginaction', [UserController::class, 'login'])->name('loginaction');

/* Kijelentkezés */
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

/* Jelszómódosítás */
Route::post('/modifypassaction', [UserController::class, 'modifyPass'])->name('modifypassaction');

/*
 * API
 */

/* Autocomplete */
Route::get('/api/autocomplete/{substr}', [GameController::class, 'autocomplete']);
Route::get('/api/autocomplete/', [GameController::class, 'autocomplete']);