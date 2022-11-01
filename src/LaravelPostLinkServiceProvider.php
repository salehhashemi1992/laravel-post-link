<?php

namespace Salehhashemi1992\LaravelPostLink;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Salehhashemi1992\LaravelPostLink\Components\PostLink;

class LaravelPostLinkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        dd('test');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'salehhashemi1992');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        Blade::component('post-link', PostLink::class);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
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
        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/salehhashemi1992'),
        ], 'post-link.views');
    }
}
