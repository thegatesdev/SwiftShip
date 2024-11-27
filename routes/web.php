<?php

use App\View\Components\Pages\App\Dashboard as AppDashboard;
use App\View\Components\Pages\Auth\Login;
use App\View\Components\Pages\Auth\Login2fa;
use App\View\Components\Pages\Auth\PasswordConfirm;
use App\View\Components\Pages\Dashboard;
use Illuminate\Support\Facades\Route;

# Public
Route::get('/', Dashboard::class)->name('home');

# Auth
Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/2fa', Login2fa::class)->name('two-factor.login');
});
Route::get('/confirm', PasswordConfirm::class)->name('password.confirm');

# App
Route::middleware(['auth'])->prefix('app')->name('app.')->group(function () {
    Route::get('/', AppDashboard::class)->name('dashboard');
});