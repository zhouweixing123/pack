<?php

namespace Zwx\Test;

use Illuminate\Support\ServiceProvider;

class TestProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/avatar.php' => config_path('avatar.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton('avatar', function ($app) {
            return new Test($app['config']);
        });
    }
}
