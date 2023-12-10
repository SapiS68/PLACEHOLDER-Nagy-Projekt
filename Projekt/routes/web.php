<?php

use Carbon\Carbon;
use App\Models\Attempt;
use App\Models\Question;
use Laravel\Prompts\Prompt;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\PromptController;

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

Route::get('/', function() {
    if(auth()->user()) {
        $date = Carbon::today();
        if(!Question::find($date)) {
            return view('welcome');// Később: oldal létrehozása, amely kiírja hogy nincs a mai nap játék
        }

        $attempt =
            Attempt::where('date','=',$date)
            ->where('username','=', auth()->user()['username'])
            ->first();
        if($attempt && $attempt['finished']) {
            return (new StatsController)->getGameStatistics();
        }
        
        return view('game');
    }
    return view('register');
})->name('index');
Route::get('/view/{rawdate}', [StatsController::class, 'viewStatsForDate']);

Route::get('/login', function() {
    return view('login'); // később oldal létrehozása
})->name('login');
Route::get('/modifypass', function() {
    return view('modifypass'); // később oldal létrehozása
})->name('modifypass');
Route::get('/admin', function() {
    return view('admin'); // később oldal létrehozása
});
Route::get('/archive', function() {
    return view('archive');
});

Route::get('/question', function() {return view('question');}) -> name('question');

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

//Új kérdés hozzáadása
Route::post('/addquestion', [PromptController::class, 'addquestion']) -> name('addquestion');


//Kérdés szerkesztése
Route::put('/editquestion', [PromptController::class, 'editquestion']) -> name('editquestion');


//Kérdés törlése
Route::delete('/deletequestion', [PromptController::class, 'deletequestion']) ->name('deletequestion');