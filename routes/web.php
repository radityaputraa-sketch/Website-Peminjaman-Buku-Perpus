<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthRedirectController;

Route::get('/', function () {
    return view('login');
});

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

Route::get('/admin-buku', function () {
    return view('admin.buku');
})->middleware('auth');

Route::get('/admin-tambah-buku', function () {
    return view('admin.tambah_buku');
})->middleware('auth');

Route::get('/admin-users', function () {
    return view('admin.users');
})->middleware('auth');

Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->middleware('auth');

Route::get('/user-peminjaman', function () {
    return view('user.peminjaman');
})->middleware('auth');

Route::get('/user-pengembalian', function () {
    return view('user.pengembalian');
})->middleware('auth');

Route::get('/dashboard', [AuthRedirectController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__.'/auth.php';