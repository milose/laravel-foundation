<?php

namespace Milose\LaravelFoundation;

use Illuminate\Support\ServiceProvider;

class LaravelFoundationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
             __DIR__.'/../resources/views/auth' => resource_path('views/vendor/laravelFoundation/auth'),
         ], 'foundation-auth');

        $this->publishes([
             __DIR__.'/../resources/views/pagination' => resource_path('views/vendor/pagination'),
         ], 'foundation-paginate');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'foundation');
    }

    public function register()
    {
    }
}
