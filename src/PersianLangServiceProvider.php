<?php

namespace Sadegh19b\PersianLang;

use Illuminate\Support\ServiceProvider;
use Illuminate\Translation\FileLoader;

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
        $langPath = __DIR__.'/../lang';

        // For Laravel 8 and below, use the resources/lang directory
        $targetLangPath = resource_path('lang');

        // Laravel 9+ uses lang directory in base path
        if (version_compare(app()->version(), '9.0', '>=')) {
            $targetLangPath = base_path('lang');
        }

        $this->registerTranslationPath($langPath);

        $this->publishes([
            $langPath.'/fa' => $targetLangPath.'/fa',
        ], 'persian-lang');
    }

    /**
     * Register the package language path with Laravel's translation loader.
     *
     * @param  string  $path
     * @return void
     */
    protected function registerTranslationPath($path)
    {
        $this->app->afterResolving('translation.loader', function (FileLoader $loader) use ($path) {
            // Get reflection to access the paths property
            $reflection = new \ReflectionClass($loader);
            $pathsProperty = $reflection->getProperty('paths');
            $pathsProperty->setAccessible(true);
            
            // Get current paths and add our package path
            $paths = $pathsProperty->getValue($loader);
            array_unshift($paths, $path);
            $pathsProperty->setValue($loader, $paths);
        });
    }
}