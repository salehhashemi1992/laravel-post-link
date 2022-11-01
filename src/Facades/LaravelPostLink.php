<?php

namespace Salehhashemi1992\LaravelPostLink\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelPostLink extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-post-link';
    }
}
