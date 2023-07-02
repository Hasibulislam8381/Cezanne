<?php

namespace App\Providers;

use App\Models\GeneralInfo;
use Illuminate\Pagination\Paginator;
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
    public function boot()
    {
        Paginator::useBootstrapFour();
        $data = GeneralInfo::first();
        view()->share(['data'=>$data]);
    }
}
