<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');         

    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function publish()
    {
        $view = DB::table('users')->get();
        return view('publish_POB', compact('view'));
    }

    public function send(Request $data)
    {
        $selected = $data->input('selected_user');
        $serial_select = serialize($selected);
        $doc = $data->input('POBname');
        foreach ($selected as $value) {
            DB::table('notification')->insert(
                    ['user_id' => $value, 'name' => $doc, 'status' => 0 ]
                );
        }
        return Redirect::to('home'); 
    }
}