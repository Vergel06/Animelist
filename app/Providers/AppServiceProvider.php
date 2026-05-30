<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- Idagdag mo ito rito sa taas

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
        // Idagdag mo itong part na ito sa loob ng boot function
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}