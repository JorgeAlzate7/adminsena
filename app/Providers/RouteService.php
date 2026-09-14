<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteService extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    protected function mapApiRoutes():void
    {
        Route::prefix('api')
        ->middleware('api')
        ->group(base_path('routes/api.php'));
    }
}
