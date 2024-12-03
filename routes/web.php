<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('index_quote');
});

Route::get('quotes/create', [App\Http\Controllers\QuoteController::class, 'create'])->name('create_quote');
Route::prefix('quotes')->group(function() {
    Route::get('', [App\Http\Controllers\QuoteController::class, 'index'])->name("index_quote");
    Route::post('', [App\Http\Controllers\QuoteController::class, 'store'])->name("store_quote");
    Route::get('{quote}', [App\Http\Controllers\QuoteController::class, 'edit'])->name('edit_quote');
    Route::post('{quote}', [App\Http\Controllers\QuoteController::class, 'update'])->name('update_quote');
    Route::delete('{quote}', [App\Http\Controllers\QuoteController::class, 'destroy'])->name('delete_quote');
});

Route::get('authors/create', [App\Http\Controllers\AuthorController::class, 'create'])->name('create_author');
Route::prefix('authors')->group(function() {
    Route::get('', [App\Http\Controllers\AuthorController::class, 'index'])->name("index_author");
    Route::post('', [App\Http\Controllers\AuthorController::class, 'store'])->name("store_author");
    Route::get('{author}', [App\Http\Controllers\AuthorController::class, 'edit'])->name('edit_author');
    Route::post('{author}', [App\Http\Controllers\AuthorController::class, 'update'])->name('update_author');
    Route::delete('{author}', [App\Http\Controllers\AuthorController::class, 'destroy'])->name('delete_author');
});