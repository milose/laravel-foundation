<?php

namespace Milose\LaravelFoundation;

use Cookie;
use Illuminate\Support\ServiceProvider;

class LaravelFoundationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
             __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravelFoundation'),
         ], 'views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelFoundation');
    }

    public function register()
    {
    }
}
