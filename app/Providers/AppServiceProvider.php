<?php

namespace App\Providers;

use App\Models\NavLink;
use App\Models\Specialist;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\DynamicComponent;
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
        Blade::component('dynamic-component', DynamicComponent::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'pages.*',
            function ($view) {
                $specialist = Specialist::first();
                $view->with(compact('specialist'));
            }
        );

        View::composer(
            'layouts.navigation',
            function ($view) {
                $navLinks = NavLink::orderBy('ordering')->get();
                $view->with(compact('navLinks'));
            }
        );
    }
}
