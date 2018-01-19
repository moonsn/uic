<?php

namespace MOONSN1994\Uic;

use Illuminate\Support\ServiceProvider;

class UicServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__).'/publishable/uic.php' => config_path('uic.php'),
        ], 'uic_config_file');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uic', function () {
            return new Uic();
        });
    }
}
