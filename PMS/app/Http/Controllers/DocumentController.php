<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Session;
use App\Folder;
use App\Http\Requests;
use App\Composer\BreadcrumbComposer;
use App\Repositories\IdRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Storage;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class DocumentController extends Controller
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
    protected $data;
    protected $array;

    public function __construct(Request $request){
        if(empty($request['idfolder'])){
            $this->data = new IdRepository(0);
            $this->array = $this->data->makebread();
            $breadcrumb = new BreadcrumbComposer($this->array);
            $breadcrumb->compose();
        }
        else{
            $this->data = new IdRepository($request['idfolder']);
            $this->array = $this->data->addbread();
            $breadcrumb = new BreadcrumbComposer($this->array);
            $breadcrumb->compose();
        }
        
    }

    public function supervisorfolder(Request $request)
    {
        if(empty($request['idfolder'])){
          $idfolder = 0;       
        }
        else{
          $idfolder = $request['idfolder'];
        }
        $currentfolder = Folder::where('id', $idfolder)->get();
        $folders = Folder::where('id_currentfolder', $idfolder)->get();
        return view('supervisor.supervisor-documents', ['folders' => $folders, 'currentfolder' => $currentfolder]);
    }


    public function  studentfolder(Request $request)
    {
        if(empty($request['idfolder'])){
          $idfolder = 0;
        }
        else{
          $idfolder = $request['idfolder'];
        }
        $folders = Folder::where('id_currentfolder', $idfolder)
                ->where ('hak_akses', 'public')
                ->get();
        return view('student.student-documents', compact('folders'));
    }


    public function createFolder(Request $request)
    {
      $idfolder = $request['folderid'];
      $namefolder = $request['foldername'];
      $privilege = $request['privilege'];
      $grupfolder = $request['foldergrup'];
      $ownerfolder = $request['folderowner'];

      $selectpath = Folder::where('id', $idfolder)->first();
      $path = $selectpath->path;
      $stringpath = $path . '/' . $namefolder;

      // code to create directory in storage folder
      if(!Storage::exists($stringpath)) {
        Storage::makeDirectory($stringpath, true);

        $folder = new Folder();

        $folder->nama_folder = $namefolder;
        $folder->owner = $ownerfolder;
        $folder->hak_akses = $privilege;
        $folder->grup_folder = $grupfolder;
        $folder->id_currentfolder = $idfolder;
        $folder->path = $stringpath;

        $folder->save();
      }
      else {
        $message = "gagal";
        echo $message;
        //return redirect()->back();
      }
      //
      return redirect()->back();
    }


    public function deleteFolder(Request $request)
    {
      $idfolder = $request['inputArray'];
      $arrayNameFolder = $request['oldfoldername'];
      $pathcurrentfolder =  $request['currentfolderpath'];

      $arrayId = explode(",", $idfolder);
      $arrayName = explode(",", $arrayNameFolder);

      $panjangArray = count($arrayId);

      for($i=0; $i<$panjangArray; $i++) {
        $path = $pathcurrentfolder . '/' . $arrayName[$i];
        Storage::deleteDirectory($path, true);
        Folder::where('path', 'LIKE', "%$path%" )->delete();
      }
      return redirect()->back();
    }


    public function renameFolder(Request $request)
    {
      $idfolder = $request['inputArray'];
      $newfoldername = $request['folderrename'];
      $oldfoldername = $request['oldfoldername'];
      $pathcurrentfolder =  $request['currentfolderpath'];
      $path = $pathcurrentfolder . '/' . $newfoldername;
      $oldpath = $pathcurrentfolder . '/' . $oldfoldername;

      Storage::move($oldpath, $path);
      Folder::where('id', $idfolder)->update(['nama_folder' => $newfoldername, 'path' => $path]);

      // echo $path;
      // echo $oldpath;
      return redirect()->back();
    }

    public function moveFolder(Request $request)
    {
      # code...
    }

    public function uploadFile()
    {
      # code...
    }
}