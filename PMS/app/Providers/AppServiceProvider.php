<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
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
        //
        /*$user = Auth::user();
        $view = DB::table('notification')->where('user_id', $user->id)->get();*/
        /*$this->count = DB::table('notification')
                ->where('id', '=', Auth::user()->id)
                ->where('status', '=', 0)
                ->count();*/
        view()->share('count', $notifs->notif());
        view()->share('view', $notifs->viewnotif());
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
