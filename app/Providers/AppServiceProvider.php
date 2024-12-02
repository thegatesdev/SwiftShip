<?php

namespace App\Providers;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use RolesEnum;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        RedirectIfAuthenticated::redirectUsing(function () {
            return route('app.dashboard');
        });
        Gate::before(function ($user, $ability) {
            if ($user->hasRole(RolesEnum::ADMIN)) {
                return true;
            }
        });
    }
}
