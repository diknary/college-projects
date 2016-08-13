<?php

namespace App;

use DB;
use Illuminate\Support\Facades\Auth;

class Notification
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function notif()
    {
        /*$user = Auth::user();
        $view = DB::table('notification')->where('user_id', $user->id)->get();*/
        $count = DB::table('notifications')->count();
        return $count;
    }
    public function viewnotif()
    {
        /*$user = Auth::user();
        $view = DB::table('notification')->where('user_id', $user->id)->get();*/
        $share = DB::table('notifications')
                ->where('user_id', '=', 1)
                ->where('status', '=', 0)
                ->get();
        return $share;
    }
}
