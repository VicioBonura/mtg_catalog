<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SetController;

Route::get('/', function () { return view('home'); })->name('home');

// Cards
Route::prefix('cards')->name('cards.')->group(function () {
    Route::get('/', [CardController::class, 'index'])->name('index');
    Route::get('/add', [CardController::class, 'create'])->name('create');
    Route::post('/add', [CardController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CardController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
    Route::post('/{id}/edit', [CardController::class, 'update'])->name('update')->where('id', '[0-9]+');
    Route::get('/{id}', [CardController::class, 'show'])->name('show')->where('id', '[0-9]+');
    //Route::delete('/{id}', [CardController::class, 'destroy'])->name('destroy');
});

//Sets
Route::prefix('sets')->name('sets.')->group(function () {
    Route::get('/', [SetController::class, 'index'])->name('index');
    Route::get('/add', [SetController::class, 'create'])->name('create');
    Route::post('/add', [SetController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [SetController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
    Route::post('/{id}/edit', [SetController::class, 'update'])->name('update')->where('id', '[0-9]+');
    Route::get('/{id}', [SetController::class, 'show'])->name('show')->where('id', '[0-9]+');
    //Route::delete('/{id}', [SetController::class, 'destroy'])->name('destroy');
});
