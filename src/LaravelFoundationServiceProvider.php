<?php

namespace Milose\LaravelFoundation;

use Illuminate\Support\ServiceProvider;

class LaravelFoundationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $local_path =  __DIR__.'/../resources/views';
        $vendor_path = resource_path('views/vendor/laravelFoundation');

        $this->publishes([
            $local_path => $vendor_path,
        ], 'zf');

        $this->loadViewsFrom($local_path, 'zf');
    }

    public function register()
    {
    }
}
