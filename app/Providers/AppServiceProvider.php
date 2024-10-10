<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        Vite::prefetch(concurrency: 3);

        if (app()->environment('local')) {
            // Disable route caching in local environment
            $this->clearCachedRoutes();
        }
    }

    protected function clearCachedRoutes()
    {
        if (file_exists(app()->getCachedRoutesPath())) {
            unlink(app()->getCachedRoutesPath());
        }
    }
}
