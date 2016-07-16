<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\UserModel;
use App\AdminModel;

class LoginController extends Controller
{
    public function getValue (Request $user){
		$name= $user->input('name');
		$password = $user->input('password');
		$data=UserModel::where('username', $name)->first();	
		$data1=AdminModel::where('username', $name)->first();
		if ($data){
			if ($data->password==$password){
				Session::put('user', $name);
				return Redirect::to('home');
			}
			else{
				return Redirect::to('login');
			}
		}
		if ($data1){
			if ($data1->password==$password){
				Session::put('admin', $name);
				return Redirect::to('admin');
			}
			else{
				return Redirect::to('login');
			}
		}
		
	}

	public function destroySession (){
		Session::flush();	
		return Redirect::to('login');
		}
}