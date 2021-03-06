<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);
        View::share('base_url',asset('/'));

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* //
         if ($this->app->environment() !== 'production') {
             $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
         }*/
        /*require_once base_path().'/app/Helpers/MyFunc.php';*/

    }
}
