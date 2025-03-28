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
        $this->publishes([
            __DIR__.'/../lang/fa' => base_path('lang/fa'),
        ], 'persian-lang');
    }
}