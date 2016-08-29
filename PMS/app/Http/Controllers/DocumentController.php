<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Session;
use App\Document;
use App\Activity;
use App\Clipboard;
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
            $this->data = new BreadcrumbRepository(1);
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
          $iddocument = 1;
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
          $iddocument = 1;
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
          $iddocument = 1;
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
          $iddocument = 1;
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

        $activity = new Activity();
        $activity->user_session = Session::get('id');
        $activity->document = $namedocument;
        $activity->status = "Created";

        $activity->save();
      }
      else {
        Session::flash('warning', 'A folder with the same name is already exist');
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
          $activity = new Activity();
          $activity->user_session = Session::get('id');
          $activity->document = $arrayName[$i];
          $activity->status = "Deleted";

          $activity->save();
        }
        else {
          $isfile = Document::where('id', $arrayId[$i])->first();
          $pathfile = $pathcurrentdocument . '/' . $arrayName[$i].'.'.$isfile->extension;
          Storage::delete($pathfile);
          Document::where('path', 'LIKE', "$pathfile%" )->delete();
          $activity = new Activity();
          $activity->user_session = Session::get('id');
          $activity->document = $arrayName[$i];
          $activity->status = "Deleted";

          $activity->save();
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

      $activity = new Activity();
      $activity->user_session = Session::get('id');
      $activity->document = $olddocumentname;
      $activity->status = "Modified";

      $activity->save();

      return redirect()->back();
    }

    public function cutDocument(Request $request)
    {
      $iddocument = $request['inputArray'];
      $arrayId = explode(",", $iddocument);
      $panjangArray = count($arrayId);

      Clipboard::where('user_session', Session::get('id'))->delete();
      for($i=0; $i<$panjangArray; $i++) {
            $clipboard = new CLipboard();

            $clipboard->user_session = Session::get('id');
            $clipboard->id_document = $arrayId[$i];
            $clipboard->status = "cut";

            $clipboard->save();
          
        }

      Session::flash('alert', 'Your file/folder successfully copied to clipboard');
      Session::put('clipboard', 'cut');
      return redirect()->back();
    }

    public function copyDocument(Request $request)
    {
      $iddocument = $request['inputArray'];
      $arrayId = explode(",", $iddocument);
      $panjangArray = count($arrayId);

      Clipboard::where('user_session', Session::get('id'))->delete();
      for($i=0; $i<$panjangArray; $i++) {
            $clipboard = new CLipboard();

            $clipboard->user_session = Session::get('id');
            $clipboard->id_document = $arrayId[$i];
            $clipboard->status = "copy";

            $clipboard->save();
          
        }

      Session::flash('alert', 'Your file/folder successfully copied to clipboard');
      Session::put('clipboard', 'copy');
      return redirect()->back();
    }

    public function pasteDocument(Request $request)
    {
      $iddocument = $request['documentid'];
      $pathcurrentdocument =  $request['currentdocumentpath'];
      
      $gets = Clipboard::join('documents', function($join) {
                     $join->on('clipboards.id_document', '=', 'documents.id')
                          ->where('clipboards.user_session', '=', Session::get('id'));
                      })
                      ->get();
      /*copy & paste*/
      if(Session::get('clipboard') == "copy"){
        foreach ($gets as $get){
          $folderdest = $pathcurrentdocument.'/'.$get->nama_document;
          $filedest = $pathcurrentdocument.'/'.$get->nama_document.'.'.$get->extension;
          if(!Storage::exists($filedest)){
              $document = new Document();

              $document->nama_document = $get->nama_document;
              $document->owner = $get->owner;
              $document->hak_akses = $get->hak_akses;
              $document->grup_document = $get->grup_document;
              $document->id_currentfolder = $iddocument;
              if($get->type == "folder"){
                $document->path = $pathcurrentdocument.'/'.$get->nama_document.' - Copy';
              }
              else{
                $document->path = $pathcurrentdocument.'/'.$get->nama_document.' - Copy'.'.'.$get->extension;
              }
              $document->extension = $get->extension;
              $document->type = $get->type;

              $document->save();

              if($get->type == "folder"){
                Storage::copy($get->path, $pathcurrentdocument.'/'.$get->nama_document);
              }
              else{ 
                Storage::copy($get->path, $pathcurrentdocument.'/'.$get->nama_document.'.'.$get->extension);
              }
            }
          else{
             $document = new Document();

              $document->nama_document = $get->nama_document.' - Copy';
              $document->owner = $get->owner;
              $document->hak_akses = $get->hak_akses;
              $document->grup_document = $get->grup_document;
              $document->id_currentfolder = $iddocument;
              if($get->type == "folder"){
                $document->path = $pathcurrentdocument.'/'.$get->nama_document.' - Copy';
              }
              else{
                $document->path = $pathcurrentdocument.'/'.$get->nama_document.' - Copy'.'.'.$get->extension;
              }
              $document->extension = $get->extension;
              $document->type = $get->type;

              $document->save();

              if($get->type == "folder"){
                Storage::copy($get->path, $pathcurrentdocument.'/'.$get->nama_document.' - Copy');
              }
              else{ 
                Storage::copy($get->path, $pathcurrentdocument.'/'.$get->nama_document.' - Copy'.'.'.$get->extension);
              }
          }
        }
      }
      /*cut & paste*/
      else{
        foreach ($gets as $get){
          $folderdest = $pathcurrentdocument.'/'.$get->nama_document;
          $filedest = $pathcurrentdocument.'/'.$get->nama_document.'.'.$get->extension;
          if(!Storage::exists($filedest)){
              $document = new Document();

              $document->nama_document = $get->nama_document;
              $document->owner = $get->owner;
              $document->hak_akses = $get->hak_akses;
              $document->grup_document = $get->grup_document;
              $document->id_currentfolder = $iddocument;
              if($get->type == "folder"){
                $document->path = $pathcurrentdocument.'/'.$get->nama_document;
              }
              else{
                $document->path = $pathcurrentdocument.'/'.$get->nama_document.'.'.$get->extension;
              }
              $document->extension = $get->extension;
              $document->type = $get->type;

              $document->save();

              if($get->type == "folder"){
                Storage::move($get->path, $pathcurrentdocument.'/'.$get->nama_document);
              }
              else{ 
                Storage::move($get->path, $pathcurrentdocument.'/'.$get->nama_document.'.'.$get->extension);
              }
              Document::where('id', $get->id)->delete();
            }
          else{
             $document = new Document();

              $document->nama_document = $get->nama_document.' - Copy';
              $document->owner = $get->owner;
              $document->hak_akses = $get->hak_akses;
              $document->grup_document = $get->grup_document;
              $document->id_currentfolder = $iddocument;
              if($get->type == "folder"){
                $document->path = $pathcurrentdocument.'/'.$get->nama_document;
              }
              else{
                $document->path = $pathcurrentdocument.'/'.$get->nama_document.'.'.$get->extension;
              }
              $document->extension = $get->extension;
              $document->type = $get->type;

              $document->save();

              if($get->type == "folder"){
                Storage::move($get->path, $pathcurrentdocument.'/'.$get->nama_document.' - Copy');
              }
              else{ 
                Storage::move($get->path, $pathcurrentdocument.'/'.$get->nama_document.'.'.$get->extension);
              }
              Document::where('id', $get->id)->delete();
          }
        }
      }

      Clipboard::where('user_session', Session::get('id'))->delete();
      Session::forget('clipboard');
      return redirect()->back();
    }

    public function uploadFile(Request $request)
    {
      if ($request->hasFile('fileupload')){
        $file = $request->file('fileupload');
        $filename = $file->getClientOriginalName();
        $pathinfo_name = pathinfo($filename, PATHINFO_FILENAME);
        $pathinfo_ext = pathinfo($filename, PATHINFO_EXTENSION);
        $owner = $request['fileowner'];
        $hakakses = $request['hakakses'];
        $path_currentfolder = $request['currentdocument'];
        $id_currentfolder = $request['id_currentfolder'];

        $filePath = $path_currentfolder.'/'.$pathinfo_name.'.'.$pathinfo_ext;
        if(!Storage::exists($filePath)){
            $upload = Storage::put($filePath, file_get_contents($file->getRealPath()));
            if ($upload) {
              $file = new Document();

              $file->nama_document = $pathinfo_name;
              $file->owner = $owner;
              $file->hak_akses = $hakakses;
              $file->id_currentfolder = $id_currentfolder;
              $file->type = "file";
              $file->path = $filePath;
              $file->extension = $pathinfo_ext;

              $file->save();

              $activity = new Activity();
              $activity->user_session = Session::get('id');
              $activity->document = $pathinfo_name;
              $activity->status = "Uploaded";

              $activity->save();

              return redirect()->back();
            }
            else {
              echo "Gagal Upload";
            }
         }
         else{
            Session::flash('warning', 'Your uploaded file is already has the same name');
            return redirect()->back();
         }

      }
      echo "Tidak Ada File";
    }

    public function updateDoc(Request $request)
    {
      if ($request->hasFile('updatefile')){
          $file = $request->file('updatefile');
          $filename = $file->getClientOriginalName();
          $pathinfo_name = pathinfo($filename, PATHINFO_FILENAME);
          $pathinfo_ext = pathinfo($filename, PATHINFO_EXTENSION);
          $iddocument = $request['inputArray'];
          $owner = $request['fileowner'];
          $hakakses = $request['hakakses'];
          $id_currentfolder = $request['id_currentfolder'];
          $grupdocument = $request['documentgrup'];
          $path_currentfolder = $request['currentdocumentpath'];
          $olddocumentname = $request['olddocumentname'];

          $filepath = Document::where('id', $iddocument)->first();

          $pattern = "/[\\w:\\s]+/";
          preg_match_all($pattern, $path_currentfolder, $matches);
          $string = substr($path_currentfolder, 10);
          $oldpath = $path_currentfolder.'/'.$olddocumentname.'.'.$filepath->extension;
          $newpath = 'Documents/Dokumen Kadaluarsa/'.$string.'/'.$olddocumentname.'.'.$filepath->extension;
          Storage::move($oldpath, $newpath);
          


          $expireddoc = Document::where('nama_document', 'Dokumen Kadaluarsa')->first();
           for($i = 1;$i < count($matches[0]);$i++){
                    if($i > 1){
                      $getid = Document::where('nama_document', $matches[0][$i])
                                         ->where('path', 'LIKE', '%Dokumen Kadaluarsa%')
                                         ->first();

                          if(empty($getid)){
                              $prevdoc = Document::where('nama_document', $matches[0][$i-1])
                                             ->where('path', 'LIKE', '%Dokumen Kadaluarsa%')
                                             ->first();
                              $document = new Document();

                              $document->nama_document = $matches[0][$i];
                              $document->owner = $owner;
                              $document->hak_akses = $hakakses;
                              $document->grup_document = $grupdocument;
                              $document->id_currentfolder = $prevdoc->id;
                              $document->path = $prevdoc->path.'/'.$matches[0][$i];
                              $document->type = "folder";

                              $document->save();
                            }

                    }
                    else{
                      $getid = Document::where('nama_document', $matches[0][$i])
                                         ->where('path', 'LIKE', '%Dokumen Kadaluarsa%')
                                         ->first();
                          if(empty($getid)){
                              $document = new Document();

                              $document->nama_document = $matches[0][1];
                              $document->owner = $owner;
                              $document->hak_akses = $hakakses;
                              $document->grup_document = $grupdocument;
                              $document->id_currentfolder = $expireddoc->id;
                              $document->path = 'Documents/Dokumen Kadaluarsa'.'/'.$matches[0][1];
                              $document->type = "folder";

                              $document->save();
                            }
                    }
                    
                }
        $count = count($matches[0]);
        $get = Document::where('nama_document', $matches[0][$count-1])
                                     -> where('path', 'LIKE', '%Dokumen Kadaluarsa%')
                                     ->first();
        Document::where('id', $iddocument)->update(['id_currentfolder' => $get->id, 'path' => $newpath]);
        
        $filePath = $path_currentfolder.'/'.$pathinfo_name.'.'.$pathinfo_ext;
        Storage::put($filePath, file_get_contents($file->getRealPath()));
              $file = new Document();

              $file->nama_document = $pathinfo_name;
              $file->owner = $owner;
              $file->hak_akses = $hakakses;
              $file->id_currentfolder = $id_currentfolder;
              $file->type = "file";
              $file->path = $filePath;
              $file->extension = $pathinfo_ext;

              $file->save();

              $activity = new Activity();
              $activity->user_session = Session::get('id');
              $activity->document = $pathinfo_name;
              $activity->status = "Uploaded";

              $activity->save();
            
      }

      else{
        Session::flash('warning', 'No File');
      }
      return redirect()->back();
    } 
}
/*if($expireddoc){
                 
                
          }
        
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
              }*/