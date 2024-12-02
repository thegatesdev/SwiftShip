<?php

use App\View\Components\Pages\App\Dashboard as AppDashboard;
use App\View\Components\Pages\App\PacketType\Create as PTCreate;
use App\View\Components\Pages\App\PacketType\Update as PTUpdate;
use App\View\Components\Pages\App\Packet\Update as PacketUpdate;
use App\View\Components\Pages\App\Packet\Create as PacketCreate;
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

# App
Route::middleware(['auth'])->prefix('app')->name('app.')->group(function () {
    Route::get('/', AppDashboard::class)->name('dashboard');
    Route::get('/confirm', PasswordConfirm::class)->name('password.confirm');

    Route::get('/type/new', PTCreate::class)->name('pt.create')
        ->middleware('can:packet_type_create');
    Route::get('/type/{packetType}', PTUpdate::class)->name('pt.update')
        ->middleware('can:packet_type_create');

    Route::get('/packet/new', PacketCreate::class)->name('packet.create')
        ->middleware('can:packet_create');
    Route::get('/packet/{packet}', PacketUpdate::class)->name('packet.update')
        ->middleware('can:packet_create');
});
