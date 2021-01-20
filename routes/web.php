<?php
use App\Models\Serveurs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServeurController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\PersoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('comptes', CompteController::class);

Route::resource('serveurs', ServeurController::class);

Route::resource('persos', PersoController::class);

Route::resource('metiers', MetierController::class);
