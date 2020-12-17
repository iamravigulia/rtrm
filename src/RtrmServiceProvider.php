<?php

namespace edgewizz\rtrm;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class RtrmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Rtrm\Controllers\RtrmController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'rtrm');
        Blade::component('rtrm::rtrm.open', 'rtrm.open');
        Blade::component('rtrm::rtrm.index', 'rtrm.index');
    }
}
