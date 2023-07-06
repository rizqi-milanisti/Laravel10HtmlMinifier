<?php

namespace rizqimilanisti\LaravelMinifier;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class MinifierServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__."/../config/minifier.php" => config_path("minifier.php"),
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/../config/minifier.php", "minifier.php");
    }
}
