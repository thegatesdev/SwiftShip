<?php

use Illuminate\Support\Facades\Route;

# Public
Route::view('/', 'home');

# Auth
Route::middleware(['guest'])->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/2fa', 'auth.login-2fa')->name('two-factor.login');
});
Route::view('/confirm', 'auth.confirm-password')->name('password.confirm');

# App
Route::middleware(['auth'])->prefix('app')->name('app.')->group(function () {
    Route::view('/', 'app.home')->name('home');
});