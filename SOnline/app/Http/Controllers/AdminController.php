<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\SubmitletterModel;
use App\StatusModel;

class AdminController extends Controller
{
    public function viewLetter (Request $data){
		if(Session::get('admin')){
			$view = SubmitletterModel::join('list_letter', 'list_letter.letter_id', '=', 'submitted_letter.letter_id')->get();
			return view('layouts.admin', compact ('view'));
		}
		else
			return Redirect::to('login');
	}
}
