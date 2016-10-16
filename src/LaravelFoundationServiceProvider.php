<?php

namespace Milose\LaravelFoundation;

use Illuminate\Support\ServiceProvider;

class LaravelFoundationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $vendor_path = resource_path('views/vendor/laravelFoundation');
        $local_path =  __DIR__.'/../resources/views';

        $this->publishes([
            $local_path => $vendor_path,
        ], 'zf');

        $this->loadViewsFrom($local_path, 'zf');

        $this->loadViewsFrom($vendor_path, 'zfc');
    }

    public function register()
    {
    }
}
