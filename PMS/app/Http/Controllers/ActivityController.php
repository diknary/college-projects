<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Session;
use App\Document;
use App\Activity;
use App\Http\Requests;
use App\Repositories\BreadcrumbRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function __construct(){
        
    }

    public function supervisoractivity()
    {
        $joins = Activity::where('user_session', '=', Session::get('id'))->get();
        return view ('supervisor.supervisor-dashboard', ['joins' => $joins, 'count' => 1]);

    }
    public function adminactivity()
    {
        $joins = Activity::where('user_session', '=', Session::get('id'))->get();
        return view ('admin.admin-dashboard', ['joins' => $joins, 'count' => 1]);

    }

    
  
}