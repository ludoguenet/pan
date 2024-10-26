<?php

namespace App\Providers;

use Pan\PanConfiguration;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        PanConfiguration::allowedAnalytics([
            'onglet-1',
        ]);

        PanConfiguration::unlimitedAnalytics();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
