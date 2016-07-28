@extends('layouts.pj')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Departemen Ilmu Komputer</h3>
            </div>

             <!-- <div class="box-header">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                  <div class="btn-group">
                    <button type="button" class="btn btn-info">New</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a data-toggle="modal" data-target="#folderModal"><i class="fa fa-folder"></i>Folder</a></li>
                      <li><a data-toggle="modal" data-target="#fileModal"><i class="fa fa-file"></i>File</a></li>
                    </ul>
                  </div>
                </div>
            </div> -->
            <!-- Modal -->
            <!-- <div class="modal fade" id="folderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Folder</h4>
                  </div>
                  <div class="modal-body">
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="fileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload File</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                    <label for="fileupload">File upload</label>
                    <input type="file" id="fileupload">
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Last Modified</th>
                  <th></th>
                </tr>
               <tr class="pointer" data-href="storage/POB-FMIPA.pdf">
                  <td><i class='fa fa-folder'></i>
                  FRM</td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
               </tr>
               <tr class="pointer" data-href="pjaudit">
                  <td><i class='fa fa-folder'></i>
                  POB Teknis</td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
               </tr>
               <tr class="pointer" data-href="pjaudit">
                  <td><i class='fa fa-folder'></i>
                  Sasaran Mutu</td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
               </tr>
               <tr>
                  <td><i class='fa fa-file-word-o'></i>
                  Program Sarmut.docx</td>
                  <td>Penanggung Jawab</td>
                  <td>11-7-2014</td>
                  <td>
                  <a class="btn btn-info btn-xs" type="button" href="https://drive.google.com/file/d/0B-_7dLGsHL7ARWNxZnVNVzZtQlE/view?usp=sharing">View</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                  </td>
               </tr>
               <tr>
                  <td><i class='fa fa-file-word-o'></i>
                  Sasaran Mutu Ilkom.docx</td>
                  <td>Penanggung Jawab</td>
                  <td>11-7-2014</td>
                  <td>
                  <a class="btn btn-info btn-xs" type="button" href="">View</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                  </td>
               </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection
