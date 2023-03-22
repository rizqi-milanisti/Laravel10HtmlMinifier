<?php

namespace rizqiMilanisti\Laravel10HtmlMinifier;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class HtmlMinifierServiceProvider extends BaseServiceProvider
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
            __DIR__."/../config/laravel10-html-minifier.php" => config_path("laravel10-html-minifier.php"),
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/../config/laravel10-html-minifier.php", "laravel10-html-minifier.php");
    }
}
