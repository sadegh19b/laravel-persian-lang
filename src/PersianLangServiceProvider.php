<?php

namespace Sadegh19b\PersianLang;

use Illuminate\Support\ServiceProvider;

class PersianLangServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // For Laravel 8 and below, use the resources/lang directory
        $path = resource_path('lang/fa');

        // Laravel 9+ uses lang directory in base path
        if (version_compare(app()->version(), '9.0', '>=')) {
            $path = base_path('lang/fa');
        }

        $this->publishes([
            __DIR__.'/../lang/fa' => $path,
        ], 'persian-lang');
    }
}