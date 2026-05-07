<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin-buku', function () {
    return view('admin.buku');
});

Route::get('/admin-tambah-buku', function () {
    return view('admin.tambah_buku');
});

Route::get('/admin-users', function () {
    return view('admin.users');
});

Route::get('/user-dashboard', function () {
    return view('user.dashboard');
});

Route::get('/user-peminjaman', function () {
    return view('user.peminjaman');
});

Route::get('/user-pengembalian', function () {
    return view('user.pengembalian');
});

require __DIR__.'/auth.php';