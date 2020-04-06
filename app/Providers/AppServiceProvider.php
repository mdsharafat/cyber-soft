<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CompanyProfile;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        $companyProfile = CompanyProfile::latest()->first();
        View::share('companyProfile', $companyProfile);
    }
}
