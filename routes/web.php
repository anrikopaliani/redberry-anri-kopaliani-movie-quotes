<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RandomQuoteController;
use App\Http\Controllers\StaticLanguageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [RandomQuoteController::class, 'index']);

Route::get('language/{locale}', [StaticLanguageController::class, 'store']);

Route::get('movies/{movie}', [MovieController::class, 'show']);

Route::middleware('guest')->group(function () {
	Route::get('login', [LoginController::class, 'index'])->name('login.get');
	Route::post('login', [LoginController::class, 'store'])->name('login.post');
});

Route::middleware('auth')->group(function () {
	Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
	Route::view('movie-form', 'add-movie-form.movie-form')->name('movie.get');
	Route::post('movie-form', [MovieController::class, 'store'])->name('movie.post');

	Route::get('/add-quote', [QuotesController::class, 'index'])->name('add-quote.get');
	Route::post('/add-quote', [QuotesController::class, 'store'])->name('add-quote.post');

	Route::prefix('quotes')->controller(QuotesController::class)->group(function () {
		Route::delete('/{quote}', 'destroy');
		Route::get('/{quote}/edit', 'edit');
		Route::patch('/{quote}', 'update');
	});
});
