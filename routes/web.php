<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuotesController;
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

Route::get('/', function () {
	return view('movies.index', [
		'movie' => 'shawshank redemption quote',
	]);
});

Route::get('login', [LoginController::class, 'index'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/add-quote', [QuotesController::class, 'index'])->middleware('auth');
