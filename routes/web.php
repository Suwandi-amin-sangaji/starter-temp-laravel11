<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.home');
});


Route::get('auth/login', function () {
    return view('auth.login');
})->name('auth.login');
Route::get('auth/register', function () {
    return view('auth.register');
})->name('auth.register');
Route::get('auth/forgot-password', function () {
    return view('auth.forgot');
})->name('forgot-password');
Route::get('auth/reset-password', function () {
    return view('auth.reset');
})->name('reset-password');
