<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use File;
use Session;
use Storage;
use App\User;
use App\Post;
use App\Activity;
use App\Studentuploadform;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
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
  public function addOperator(Request $request)
  {
      $get = User::all();
      return view('admin.admin-operator_add', compact('get'));
  }

  public function listOperator(){

  }

  public function postNews(Request $request)
  {
    if ($request->hasFile('image')){
      $username = $request['username'];
      $title = $request['title'];
      $body = $request['body'];
      $file = $request->file('image');
      // $image = $file->getClientOriginalName();
      $name = $title;
      $name = str_replace(array( '<', '>', ':', '"', '/', '|', '|', '?', '*'), '', $title);
      $filePath = "Posts".'/'.$name.".jpg";
      $upload = Storage::put($filePath, file_get_contents($file->getRealPath()));
      if($upload){
        $post = new Post();
        $post->username = $username;
        $post->news_title = $title;
        $post->news_body = $body;
        $post->image_path = $filePath;
        if (!empty($request['post'])){
          $post->is_posted = 1;
          $activity = new Activity();
          $activity->user_session = Session::get('id');
          $activity->document = $title;
          $activity->status = "Posted News";
          $activity->save();
        }
        else {
          $post->is_posted = 0;
        }
        $post->save();
      }
      if (!empty($request['post'])){
        return redirect()->route('list-news');
      }
      else {
        return redirect()->route('draft-news');
      }
    }
    else echo "file gambar tidak ada";
  }

  public function getNews()
  {
    $news = Post::where('is_posted', '1')->orderBy('created_at', 'desc')->get();
    $latestnews = Post::where('is_posted', '1')->orderBy('created_at', 'desc')->take(5)->get();
    return view('welcome', ['news' => $news, 'latestnews' => $latestnews]);
  }

  public function getDraft()
  {
    $news = Post::where('is_posted', '0')->orderBy('created_at', 'desc')->get();
    return view('admin.admin-draft', ['news' => $news]);
  }

  public function getNewsList()
  {
    $news = Post::where('is_posted', '1')->orderBy('created_at', 'desc')->get();
    return view('admin.admin-news_list', ['news' => $news]);
  }

  public function deleteNews(Request $request)
  {
    $id = $request['id'];
    $path = Post::where('id', $id)->pluck('image_path');
    $path = str_replace(array( '[', ']', '"'), '', $path);
    Storage::delete($path);
    Post::where('id', $id)->delete();
    // echo $path;
    return redirect()->back();
  }

  public function editNews(Request $request)
  {
    $idnews = $request['id'];

    $editnews = Post::where('id', $idnews)->get();

    return view('admin.admin-edit_news', ['editnews' => $editnews]);
  }

  public function saveNews(Request $request)
  {
    $id = $request['id'];
    $title = $request['title'];
    $body = $request['body'];
    $oldnameimage = $request['oldnameimage'];
    $patholdimage = 'Posts/'.$oldnameimage.'.jpg';
    // echo $patholdimage;
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $filePath = "Posts".'/'.$title.".jpg";
      Storage::delete($patholdimage);
      Storage::put($filePath, file_get_contents($file->getRealPath()));
      Post::where('id', $id)->update(['news_title' => $title, 'news_body' => $body, 'image_path' => $filePath]);
    }
    else {
      Post::where('id', $id)->update(['news_title' => $title, 'news_body' => $body]);
    }
    $news = Post::where('id', $id)->get();
    return view('admin.admin-news_list', ['news' => $news]);
  }

  public function services()
  {
    $forms = Studentuploadform::orderBy('created_at', 'desc')->get();

    $studentName = Session::get('studentName');

    return view('admin.admin-service', ['forms' => $forms, 'studentName' => $studentName]);
  }

  public function changeStatus(Request $request)
  {
    $newstatus = $request['newStatus'];
    $id = $request['idform'];

    Studentuploadform::where('id', $id)->update(['status' => $newstatus]);

    return redirect()->back();
  }
}
