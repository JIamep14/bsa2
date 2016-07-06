<?php

namespace App\Providers;

use App\Lib\Smartphone;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Smartphone', function ($app) {
            return new Smartphone("Sony Xperia", "Qualcomm 12345", 4, "1280x720", 12, 2700);
        });
    }
}
