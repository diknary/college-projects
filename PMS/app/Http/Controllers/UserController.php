<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use DB;
use Session;
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
            Session::put(['id' => $get->id, 'supervisorName' => $get->name]);
            return Redirect::to('home');
        }
        else{
          
            Session::put(['NIM' => $result->nim, 'studentName' => $result->nama]);
            return Redirect::to('student-dashboard');
          }
        
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

    public function logout()
    {
       Session::flush();
       return Redirect::to('/');
    }
}