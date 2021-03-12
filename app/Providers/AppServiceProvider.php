<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Jika migrate Error
// use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Jika migrate Error
        // Schema::defaultStringLength(255);
    }
}
