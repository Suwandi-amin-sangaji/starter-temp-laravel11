<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Routing Admin
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('home');

});

// Routing User
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('home');


});
