<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class, 'show'])->name('main');
Route::get('/oil', [MainController::class, 'oil'])->name('oil');
Route::get('/accum', [MainController::class, 'accum'])->name('accum');
Route::get('/filters', [MainController::class, 'filters'])->name('filters');
Route::get('/chemistry', [MainController::class, 'chemistry'])->name('chemistry');
Route::get('/about', [MainController::class, 'about'])->name('about');
// Route::get('/', [MainController::class, 'show']);

