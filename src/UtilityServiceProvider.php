<?php

namespace Cluster\Utility;

use Cluster\Utility\Services\Utility;
use Illuminate\Support\ServiceProvider;

class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("utility", function ($app) {
            return new Utility();
        });
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/utility.php' => config_path('utility.php'),
        ]);
    }
}