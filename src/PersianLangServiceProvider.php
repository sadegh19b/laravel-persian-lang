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
        if (method_exists($this, 'publishes')) {
            // For Laravel 5.3+
            $this->publishes([
                __DIR__.'/../lang/fa' => base_path('resources/lang/fa'),
            ], 'persian-lang');
        }else {
            // For Laravel 5.0-5.2
            $this->app['files']->copyDirectory(
                __DIR__.'/../lang/fa',
                base_path('resources/lang/fa')
            );
        }
    }
}