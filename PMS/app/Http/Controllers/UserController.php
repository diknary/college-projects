<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;


use Session;
use App\User;
use App\Http\Controllers\Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class UserController extends Controller
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
    public function auth(Request $request)
    {
        /*$validation = Validator::make($request->all(), [
            'username' => 'required|exist:users,username',
            'password' => 'required|confirmed',
            ]);
        if($validation->fails()){
            return Redirect::to('login')->withErrors($validation);
        }
        else{*/
                $username = $request->input('username');
                $password = $request->input('password');
                $user = array(
                    "username" => $username,
                    "password" => $password
                );
                $user_string = json_encode($user);

                $ch = curl_init('http://greentransport.ipb.ac.id/api/simak');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $user_string);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                

                $exec = curl_exec($ch);
                $result = json_decode($exec);

                if(empty($result)){
                    $get = User::where('username', $username)->first();
                    if($get->role == 'pd'){
                        Session::put(['id' => $get->username, 'staffName' => $get->name, 'departemen' => $get->departemen, 'role' => $get->role]);
                        return Redirect::to('supervisor-dashboard');
                    }
                    elseif($get->role == 'admin'){
                        Session::put(['id' => $get->username, 'staffName' => $get->name, 'departemen' => $get->departemen, 'role' => $get->role]);
                        return Redirect::to('admin-dashboard');
                    }
                    elseif ($get->role == 'staff'){
                        Session::put(['id' => $get->username, 'staffName' => $get->name, 'departemen' => $get->departemen, 'role' => $get->role]);
                        return Redirect::to('staff-dashboard');
                    }
                    else
                        {
                        Session::put(['NIM' => $get->username, 'studentName' => $get->name]);
                        return Redirect::to('student-dashboard');
                    }
                }
                else{
                  
                    Session::put(['NIM' => $result->nim, 'studentName' => $result->nama]);
                    return Redirect::to('student-dashboard');
                  }
        /*}*/
    }

    public function logout()
    {
       Session::flush();
       return Redirect::to('/');
    }
}