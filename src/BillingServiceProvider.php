<?php

namespace Saiba\Billing;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require ___DIR___.'/routes.php';
        }

        $this->loadViewsFrom(base_path('resources/views'), 'billing');

        $this->publishes([___DIR___.'/views' => base_path('resources/views')]);

        $this->publishes([___DIR___.'/migrations' => database_path('migrations')], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}