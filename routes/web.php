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




//!pagina che mostra tutti gli articoli
Route::get('/articoli', [ArticleController::class, 'index'])->name('articoli');

//!rotta per creazione articolo
Route::get('/articol/crea', [ArticleController::class, 'create'])->name('creaArticolo');
//!rotta store article per scrivere il record sul database
Route::post('/articoli/crea-post', [ArticleController::class, 'store'])->name('store');

//!rotta dettaglio articolo
Route::get('/articoli/dettaglio/{id}', [ArticleController::class, 'show'])->name('dettaglioArticolo');

//!rotta per la vista di modifica dell'articolo
Route::get('/articoli/edit/{id}', [ArticleController::class, 'edit'])->name('modificaArticolo');

//!rotta per scrivere l'aggiornamento dell'articolo
Route::put('/articoli/edit/{id}', [ArticleController::class, 'update'])->name('modificaArticoloPut');
//!rotta per eliminazione dell'articolo
Route::delete('/articoli/elimina/{id}', [ArticleController::class, 'destroy'])->name('eliminaArticolo');






Route::get('/profile', [PublicController::class, 'profile'])->name('profile')->middleware(['auth', 'verified']);

