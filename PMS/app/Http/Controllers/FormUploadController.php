<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Session;
use Storage;
use File;
use App\Studentuploadform;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;


class FormUploadController extends Controller
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

  public function uploadForm(Request $request)
  {
    if ($request->hasFile('uploadform')) {
      $file = $request->file('uploadform');
      $filename = $file->getClientOriginalName();

      $form = new Studentuploadform();

      if(Storage::put("StudentUpload/Uploaded".'/'.$filename, file_get_contents($file->getRealPath()))){
        $form->nim = $request['nim'];
        $form->nama_form = $request['kategori-form'];
        $form->status = "Telah diupload";
        $form->file_name = $filename;

        $form->save();
      }
      return Redirect::to('student-dashboard');
    }
    echo "Tidak ada file";
  }

  public function studentDashboard()
  {
    $user = Session::get('NIM');
    $forms = Studentuploadform::where('nim', $user)->orderBy('created_at', 'desc')->get();

    return view('student.student-dashboard', ['forms' => $forms]);
  }
}
