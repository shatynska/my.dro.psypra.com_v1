<?php

namespace App\Providers;

use App\Models\NavLink;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(
            'layouts.navigation',
            function ($view) {
                $navLinks = NavLink::orderBy('ordering')->get();
                $view->with('navLinks', $navLinks);
            }

        );
    }
}
