<?php

namespace Milose\LaravelFoundation;

use Illuminate\Support\ServiceProvider;

class LaravelFoundationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
             __DIR__.'/../resources/views' => resource_path('views/vendor/laravelFoundation'),
         ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'foundation');
    }

    public function register()
    {
    }
}
