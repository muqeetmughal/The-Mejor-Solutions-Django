<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $filedata = file_get_contents(base_path().'/services/services.json');
        $services = json_decode($filedata);
        view()->share("site_title", "The Mejor Solutions");
        view()->share("services", $services);
    }
}
