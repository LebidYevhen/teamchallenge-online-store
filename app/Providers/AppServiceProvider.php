<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!defined('L5_SWAGGER_SERVER_LOCAL')) {
            define('L5_SWAGGER_SERVER_LOCAL', config('l5-swagger.servers')[0]['url']);
        }

        if (!defined('L5_SWAGGER_SERVER_DEV')) {
            define('L5_SWAGGER_SERVER_DEV', config('l5-swagger.servers')[1]['url']);
        }

        if (!defined('L5_SWAGGER_SERVER_PROD')) {
            define('L5_SWAGGER_SERVER_PROD', config('l5-swagger.servers')[2]['url']);
        }
    }
}
