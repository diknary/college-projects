@extends('layouts.pj')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Audit Internal</h3>
            </div>

             <div class="box-header">
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
            </div>
            <!-- Modal -->
            <div class="modal fade" id="folderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Folder</h4>
                  </div>
                  <div class="modal-body">
                    
                    <div class="form-group">
                      <label for="foldername">Folder Name</label>
                      <input type="text" class="form-control" name="fname" id="id_fname">
                    </div>

                    <div class="form-group">
                      <label>Share to</label>
                        <select name="selected_user[]" class="form-control select2" multiple="multiple" data-placeholder="Select recipients" style="width: 100%;">
                            <option value='public'>Public</option>
                            <option value='staff'>Staff</option>
                            <option value='pj'>PIC</option>
                        </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create</button>
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

                    <div class="form-group">
                      <label>Share to</label>
                        <select name="selected_user[]" class="form-control select2" multiple="multiple" data-placeholder="Select recipients" style="width: 100%;">
                            <option value='public'>Public</option>
                            <option value='staff'>Staff</option>
                            <option value='pj'>PIC</option>
                        </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>


            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Last Modified</th>
                  <th></th>
                </tr>
               <tr>
                  <td><i class='fa fa-file-pdf-o'></i>
                  POB-FMIPA-KP-22 PEMBUATAN KARPEG, KARIS,KARSU, TAS…ev_01_10_2015.pdf</td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                  <td>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Update</a>
                  </td>
               </tr>
               <tr>
                  <td><i class='fa fa-file-pdf-o'></i>
                  POB-FMIPA-KP-23 PENYUSUNAN DP3 TENDIK FMIPA_Rev_01_10_2015.pdf</td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                  <td>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Update</a>
                  </td>
               </tr>
               <tr>
                  <td><i class='fa fa-file-pdf-o'></i>
                  POB-FMIPA-KP-24 PENYUSUNAN DP3 KTU FMIPA_Rev_01_10_2015.pdf</td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                  <td>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Update</a>
                  </td>
               </tr>
               <tr>
                  <td><i class='fa fa-file-pdf-o'></i>
                  POB-FMIPA-KP-26 KENAIKAN PANGKAT TENDIK_Rev_01_10_2015.pdf</td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                  <td>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                  <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                  <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#fileModal">Update</a>
                  </td>
               </tr>
               
              </tbody></table>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection
