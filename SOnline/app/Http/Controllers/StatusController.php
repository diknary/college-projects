<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\SubmitletterModel;
use App\StatusModel;

class StatusController extends Controller
{
    public function getStatus (){
		if(Session::get('user')){
			$data=StatusModel::join('list_letter', 'list_letter.letter_id', '=', 'letter_status.letter_id')->get();
			return view ('layouts.status', compact('data'));
			}
		else
			return Redirect::to('login');
		}
	 public function setStatus (Request $data){
		if(Session::get('admin')){
			if($data->input('accept')){
				$table = StatusModel::where('id', $data->input('id'))->first();
				$form = SubmitletterModel::where('id', $data->input('id'))->first();
				$table->status = 'Accepted';
				$table->save();
				return Redirect::to($form->form);
			}
		}
		else
			return Redirect::to('login');
		}
	
}
