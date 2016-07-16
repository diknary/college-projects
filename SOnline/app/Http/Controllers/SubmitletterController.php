<?php

namespace App\Http\Controllers;
use Session;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;


use App\Http\Requests;
use App\SubmitletterModel;
use App\UserModel;
use App\StatusModel;

class SubmitletterController extends Controller
{
    public function formLetter($id){
		if(Session::get('user')){
			return view('layouts.SuratCetakKSM', compact('id'));
		}
		else if(Session::get('admin')){
			return view ('layouts.admin');
		}
		else
			return Redirect::to('login');
	}
	
	public function submit (Request $user){
		if(Session::get('user')){
			
			$validation = Validator::make($user->all(), array(
            'keperluan'=>'required',
            'file'=>'required|Max:500',
            ));
			if ($validation -> fails()) 
				{
				return Redirect::to('/home')->withErrors($validation);
				}
			else
			{
				$name = Session::get('user');
				$request =UserModel::where('username', $name)->first();
				$form = $user->file('file');
				$upload = 'uploaded/'.$name;
				$filename = $form->getClientOriginalName();
				$success = $form->move($upload,$filename);
				if ($success) {
					$table = new SubmitletterModel;
					$table->NIM = $request->NIM;
					$table->letter_id = $user->input('id');
					$table->name = $request->name;
					$table->keperluan = $user->input('keperluan');
					$table->form =  $upload.'/'.$filename;
					$table->save();
					$table2 = new StatusModel;
					$table2->NIM = $request->NIM;
					$table2->letter_id = $user->input('id');
					$table2->name = $request->name;
					$table2->form = $upload.'/'.$filename;
					$table2->status = 'Pending';
					$table2->save();
					
					return Redirect::to('home');
				}
			}
		}
		else if(Session::get('admin')){
			return view ('layouts.admin');
		}
		else
			return Redirect::to('login');
	}
		
}
