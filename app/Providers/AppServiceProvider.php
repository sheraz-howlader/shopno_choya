<?php

namespace App\Providers;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        RedirectIfAuthenticated::redirectUsing(function () {
            return route('home');
        });


        //Model::preventLazyLoading();
        //Model::preventSilentlyDiscardingAttributes();
        //Model::preventAccessingMissingAttributes();
        Model::shouldBeStrict();
    }
}
