<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LogService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the LogService to the service container
        $this->app->singleton('logservice', function ($app) {
            return new LogService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    
    public function boot(): void
    {
        //
    }
}
