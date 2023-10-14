<?php

namespace App\Providers;

use App\Models\Categories;
use App\Models\System;
use Illuminate\Support\ServiceProvider;

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
        view()->share('system', System::where('id', 1)->first());
        view()->share('categories', Categories::where('main_category', 0)->get());
    }
}
