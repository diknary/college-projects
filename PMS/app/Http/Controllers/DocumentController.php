<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Session;
use App\Document;
use App\Http\Requests;
use App\Composer\BreadcrumbComposer;
use App\Composer\DocumentComposer;
use App\Repositories\BreadcrumbRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
    protected $document;

    public function __construct(Request $request, DocumentComposer $document){
        if(empty($request['iddocument'])){
            $this->data = new BreadcrumbRepository(0);
            $this->array = $this->data->makebread();
            $breadcrumb = new BreadcrumbComposer($this->array);
            $breadcrumb->compose();
        }
        else{
            $this->data = new BreadcrumbRepository($request['iddocument']);
            $this->array = $this->data->addbread();
            $breadcrumb = new BreadcrumbComposer($this->array);
            $breadcrumb->compose();
        }
        $document->compose();
        
    }

    public function supervisorfolder(Request $request)
    {
        if(empty($request['iddocument'])){
          $iddocument = 0;
        }
        else{
          $iddocument = $request['iddocument'];
        }
        $currentdocument = Document::where('id', $iddocument)->get();
        $folders = Document::where('id_currentfolder', $iddocument)
                ->where('type', '=', 'folder')
                ->orderBy('nama_document')
                ->get();
        $files = Document::where('id_currentfolder', $iddocument)
                ->where('type', '<>', 'folder')
                ->orderBy('nama_document')
                ->get();

        return view('supervisor.supervisor-documents', ['folders' => $folders, 'files' => $files, 'currentdocument' => $currentdocument]);
    }

    public function adminfolder(Request $request)
    {
        if(empty($request['iddocument'])){
          $iddocument = 0;
        }
        else{
          $iddocument = $request['iddocument'];
        }
        $currentdocument = Document::where('id', $iddocument)->get();
        $folders = Document::where('id_currentfolder', $iddocument)
                ->where('type', '=', 'folder')
                ->orderBy('nama_document')
                ->get();
        $files = Document::where('id_currentfolder', $iddocument)
                ->where('type', '<>', 'folder')
                ->orderBy('nama_document')
                ->get();

        return view('admin.admin-documents', ['folders' => $folders, 'files' => $files, 'currentdocument' => $currentdocument]);
    }

    public function stafffolder(Request $request)
    {
        if(empty($request['iddocument'])){
          $iddocument = 0;
        }
        else{
          $iddocument = $request['iddocument'];
        }
        $currentdocument = Document::where('id', $iddocument)->get();
        $folders = Document::where('id_currentfolder', $iddocument)
                ->where('type', '=', 'folder')
                ->orderBy('nama_document')
                ->get();
        $files = Document::where('id_currentfolder', $iddocument)
                ->where('type', '<>', 'folder')
                ->orderBy('nama_document')
                ->get();

        return view('staff.staff-documents', ['folders' => $folders, 'files' => $files, 'currentdocument' => $currentdocument]);
    }

    public function studentfolder(Request $request)
    {
        if(empty($request['iddocument'])){
          $iddocument = 0;
        }
        else{
          $iddocument = $request['iddocument'];
        }
        $currentdocument = Document::where('id', $iddocument)->get();
        $folders = Document::where('id_currentfolder', $iddocument)
                ->where('type', '=', 'folder')
                ->where('hak_akses', 'public')
                ->orderBy('nama_document')
                ->get();
        $files = Document::where('id_currentfolder', $iddocument)
                ->where('type', '<>', 'folder')
                ->orderBy('nama_document')
                ->get();
        
        return view('student.student-documents', ['folders' => $folders, 'files' => $files, 'currentdocument' => $currentdocument]);
    }

    public function createFolder(Request $request)
    {
      $iddocument = $request['documentid'];
      $namedocument = $request['documentname'];
      $privilege = $request['privilege'];
      $grupdocument = $request['documentgrup'];
      $ownerdocument = $request['documentowner'];

      $selectpath = Document::where('id', $iddocument)->first();
      $path = $selectpath->path;
      $stringpath = $path . '/' . $namedocument;

      // code to create directory in storage folder
      if(!Storage::exists($stringpath)) {
        Storage::makeDirectory($stringpath, true);

        $document = new Document();

        $document->nama_document = $namedocument;
        $document->owner = $ownerdocument;
        $document->hak_akses = $privilege;
        $document->grup_document = $grupdocument;
        $document->id_currentfolder = $iddocument;
        $document->path = $stringpath;
        $document->type = "folder";

        $document->save();
      }
      else {
        $message = "gagal";
        echo $message;
        //return redirect()->back();
      }
      //
      return redirect()->back();
    }

    public function deleteDocument(Request $request)
    {
      $iddocument = $request['inputArray'];
      $arrayNamedocument = $request['olddocumentname'];
      $pathcurrentdocument =  $request['currentdocumentpath'];

      $arrayId = explode(",", $iddocument);
      $arrayName = explode(",", $arrayNamedocument);

      $panjangArray = count($arrayId);

      for($i=0; $i<$panjangArray; $i++) {
        $path = $pathcurrentdocument . '/' . $arrayName[$i];
        $isfolder = Document::where('id', $arrayId[$i])
                    ->where('type', 'folder')
                    ->get();
        $isfolder = count($isfolder);
        if($isfolder){
          Storage::deleteDirectory($path, true);
          Document::where('path', 'LIKE', "$path%" )->delete();
        }
        else {
          Storage::delete($path);
          Document::where('path', 'LIKE', "$path%" )->delete();
        }
      }
      return redirect()->back();
    }

    public function renameDocument(Request $request)
    {
      $iddocument = $request['inputArray'];
      $newdocumentname = $request['documentrename'];
      $olddocumentname = $request['olddocumentname'];
      $pathcurrentdocument =  $request['currentdocumentpath'];
      $path = $pathcurrentdocument . '/' . $newdocumentname;
      $oldpath = $pathcurrentdocument . '/' . $olddocumentname;

      Storage::move($oldpath, $path);
      Document::where('id', $iddocument)->update(['nama_document' => $newdocumentname, 'path' => $path]);

      // echo $path;
      // echo $oldpath;
      return redirect()->back();
    }

    public function moveDocument(Request $request)
    {
      # code...
    }

    public function uploadFile(Request $request)
    {
      if ($request->hasFile('fileupload')){
        $file = $request->file('fileupload');
        $filename = $file->getClientOriginalName();
        $owner = $request['fileowner'];
        $hakakses = $request['hakakses'];
        $path_currentfolder = $request['currentdocument'];
        $id_currentfolder = $request['id_currentfolder'];
        // echo $filename;
        $filePath = $path_currentfolder.'/'.$filename;
        $upload = Storage::put($filePath, file_get_contents($file->getRealPath()));
        if ($upload) {
          $file = new Document();

          $file->nama_document = $filename;
          $file->owner = $owner;
          $file->hak_akses = $hakakses;
          $file->id_currentfolder = $id_currentfolder;
          $file->type = "file";
          $file->path = $filePath;

          $file->save();

          return redirect()->back();
        }
        else {
          echo "Gagal Upload";
        }
      }
      echo "Tidak Ada File";
    }
}