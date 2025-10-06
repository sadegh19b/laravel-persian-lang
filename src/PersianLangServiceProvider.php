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

        // For Laravel 6 and 7 use the resources/lang directory
        $targetLangPath = resource_path('lang/fa');

        // Laravel 8+ uses lang path helper
        if (version_compare(app()->version(), '8.0', '>=')) {
            $targetLangPath = lang_path('fa');
        }

        $this->registerTranslationPath($langPath);

        $this->publishes([
            $langPath.'/fa' => $targetLangPath,
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
