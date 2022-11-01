<?php

namespace Salehhashemi1992\LaravelPostLink;

use Illuminate\Support\ServiceProvider;

class LaravelPostLinkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'salehhashemi1992');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'salehhashemi1992');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/post-link.php', 'post-link');

        // Register the service the package provides.
        $this->app->singleton('laravel-post-link', function ($app) {
            return new LaravelPostLink;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['laravel-post-link'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel-post-link.php' => config_path('laravel-post-link.php'),
        ], 'laravel-post-link.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/salehhashemi1992'),
        ], 'laravel-post-link.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/salehhashemi1992'),
        ], 'laravel-post-link.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/salehhashemi1992'),
        ], 'laravel-post-link.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
