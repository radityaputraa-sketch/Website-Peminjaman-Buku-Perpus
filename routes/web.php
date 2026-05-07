<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('/books', [BookController::class, 'index']);

    Route::post('/books', [BookController::class, 'store']);

    Route::post('/pinjam/{id}', [LoanController::class, 'pinjam']);

    Route::post('/kembalikan/{id}', [LoanController::class, 'kembalikan']);

});

require __DIR__.'/auth.php';