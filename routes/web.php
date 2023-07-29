<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PrivateController;

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

Route::get('/', [PublicController::class, 'index'])->name('home');





Route::get('/articoli/crea-post', [ArticleController::class, 'index'])->name('create');

Route::post('/articoli/crea-post', [ArticleController::class, 'store'])->name('store');

Route::get('/profile', [PublicController::class, 'profile'])->name('profile')->middleware(['auth', 'verified']);

