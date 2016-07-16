<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;

class HomeController extends Controller
{
    public function viewHome (){
		if(Session::get('user')){
			return view ('layouts.homepage');
		}
		else
			return Redirect::to('login');
	}
}