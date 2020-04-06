<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CompanyProfile;
use App\Service;
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
        $companyProfileObject = CompanyProfile::latest()->first();
        $servicesObject       = Service::latest()->take(6)->get();
        
        View::share(['companyProfileObject' => $companyProfileObject, 'servicesObject' => $servicesObject]);
    }
}
