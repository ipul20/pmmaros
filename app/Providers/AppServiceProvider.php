<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // class_alias(\App\Helpers\Helper::class, 'Helper');
        $loader = AliasLoader::getInstance();

        // Add your aliases
        $loader->alias('Helper', \App\Helpers\Helper::class);

    }
    
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // require_once app_path('Helpers/Helpers.php');
        require_once app_path('Helpers/Upload.php');
    }
}
