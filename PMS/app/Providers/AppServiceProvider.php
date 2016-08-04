<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;
use Breadcrumbs;
use App\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Notification $notifs)
    {
        view()->share('count', $notifs->notif());
        view()->share('share', $notifs->viewnotif());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
