<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TypeTours;

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
        view()->composer('header', function($view){
            $type_tours = TypeTours::all();
            $view->with ('type_tours', $type_tours);
        });
    }
}
