<?php

namespace Milose\LaravelFoundation;

use Cookie;
use Illuminate\Support\ServiceProvider;

class LaravelFoundationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
             __DIR__.'/../resources/views/auth' => base_path('resources/views/vendor/laravelFoundation/auth'),
         ], 'foundation-auth');

        $this->publishes([
             __DIR__.'/../resources/views/pagination' => base_path('resources/views/vendor/pagination'),
         ], 'foundation-paginate');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'foundation');
    }

    public function register()
    {
    }
}
