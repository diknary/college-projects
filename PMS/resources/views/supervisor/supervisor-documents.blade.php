@extends('layouts.masters.supervisor')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="col-xs-12">
          <div class="box">

						@foreach ($currentdocument as $current)
						<div class="box-header">
              <h3 class="box-title">{{ $current->nama_document}}</h3>
            </div>

						@if(Session::get('departemen') == $current->grup_document)
							<!-- button new folder & file -->
							<div class="box-header">
								 <div class="margin">
									 <div id="newButt" class="btn-group newButton" style='display:show'>
										 <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp New</button>
										 <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											 <span class="caret"></span>
											 <span class="sr-only">Toggle Dropdown</span>
										 </button>
										 <ul class="dropdown-menu" role="menu">
											 <li><a data-toggle="modal" data-target="#folderModal"><i class="fa fa-folder"></i>Folder</a></li>
											 <li><a data-toggle="modal" data-target="#fileModal"><i class="fa fa-file"></i>File</a></li>
										 </ul>
									 </div>

									 <!-- delete button -->
									 <form id="deleteButton" class="btn-group deleteButton" action="{{ route('document-delete') }}" method="post" style="display:none">
										<!-- input hidden -->
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
 										<input type="hidden" class="form-control" name="inputArray" id="inputDelete">
 										<input type="hidden" class="form-control" name="currentdocumentpath" value="{{ $current->path }}">
 										<input type="hidden" class="form-control" name="olddocumentname"id="olddocumentname">
										<!-- close input hidden -->
 										<button type="submit" href="" class="btn btn-primary"><i class="fa fa-trash"></i>&nbsp Delete</button>
									 </form>
									 <!-- move button -->
									 <form id="moveButton" class="btn-group moveButton" action="" method="post" style="display:none">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input id="inputMove" type="text" name="inputArray" value="" hidden>
 										<button type="button" data-toggle="modal" data-target="#moveDocument" class="btn btn-primary"><i class="fa fa-sign-out"></i>&nbsp Move</button>
									 </form>
									 <!-- copy button -->
									 <form id="copyButton" class="btn-group copyButton" action="" method="post" style="display:none">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input id="inputCopy" type="text" name="inputArray" value="" hidden>
										<button type="submit" class="btn btn-primary"><i class="fa fa-copy"></i>&nbsp Copy</button>
									 </form>
									 <!-- rename button -->
									 <div id="renameButton" class="btn-group renameButton"  style="display:none">
										<button data-toggle="modal" data-target="#renameDocument" type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp Rename</button>
									</div>

								 </div>
						 	</div>

					 <!-- Modal -->
					 <div class="modal fade" id="folderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						 <div class="modal-dialog">
							 <div class="modal-content">

								 <form action="{{ route('folder-create') }}" method="post">
									 <div class="modal-header">
										 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										 <h4 class="modal-title" id="myModalLabel">Create Folder</h4>
									 </div>
									 <div class="modal-body">

										 <!-- Hidden input -->
										 <input type="hidden" name="_token" value="{{ csrf_token() }}">
										 <input type="hidden" class="form-control" name="documentid" id="documentid" value="{{ $current->id }}">
										 {{-- <input type="hidden" class="form-control" name="foldergrup" id="foldergrup" value="{{ $current->grup_folder }}"> --}}
										 <input type="hidden" class="form-control" name="documentowner" id="documentowner" value="{{ Session::get('staffName') }}">
										 <!-- End hidden input -->

										 <div class="form-group">
											 <label for="documentname">Folder Name</label>
											 <input type="text" class="form-control" name="documentname" id="documentname">
										 </div>
										 <div class="form-group">
											 <label>Privilage</label>
												 <select name="privilege" class="form-control" style="width: 100%;">
														 <option value='public'>Public</option>
														 <option value='protected'>Protected</option>
												 </select>
										 </div>

										 <!-- input sementara -->
										 <div class="form-group">
											 <label>Grup Folder</label>
												 <select name="documentgrup" class="form-control" style="width: 100%;">
														 <option value='mipa'>FMIPA</option>
														 <option value='stk'>Statistika</option>
														 <option value='gfm'>Geofisika dan Meteorologi</option>
														 <option value='bio'>Biologi</option>
														 <option value='kim'>Kimia</option>
														 <option value='mat'>Matematika</option>
														 <option value='kom'>Ilmu Komputer</option>
														 <option value='fis'>Fisika</option>
														 <option value='bik'>Biokimia</option>
												 </select>
										 </div>
										 <!-- -->

										 <div class="form-grup">
											 <p class="form-grup">
												 <strong>Public</strong> :<br/>
												 Folder dapat dilihat oleh semua pengguna sistem termasuk pegawai dan mahasiswa FMIPA
											 </p>
											 <p class="form-grup">
												 <strong>Protected</strong> :<br>
												 Folder hanya dapat dilihat oleh pengendali dokumen serta pegawai FMIPA
											 </p>
										 </div>
									 </div>
									 <div class="modal-footer">
										 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn btn-primary">Create</button>
									 </div>
								 </form>

							 </div>
						 </div>
					 </div>

					 <!-- file modal -->
					 <div class="modal fade" id="fileModal" tabindex="-1"  aria-labelledby="myModalLabel">
						 <div class="modal-dialog">
							 <div class="modal-content">
								 <form action="{{ route('file-upload') }}" method="post" enctype="multipart/form-data">

									 <div class="modal-header">
										 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										 <h4 class="modal-title" id="myModalLabel">Upload File</h4>
									 </div>
									 <div class="modal-body">
										 <!-- Hidden input -->
										 <input type="hidden" name="_token" value="{{ csrf_token() }}">
										 <input type="hidden" name="fileowner" id="documentowner" value="{{ Session::get('staffName') }}">
										 <input type="hidden" name="currentdocument" value="{{ $current->path }}">
										 <input type="hidden" name="hakakses" value="{{ $current->hak_akses }}">
										 <input type="hidden" name="id_currentfolder" value="{{ $current->id }}">
										 <!-- End hidden input -->
										 <div class="form-group">
											 <label for="fileupload">Upload File</label>
											 <input type="file" class="form-control" name="fileupload">
										 </div>

									 </div>
									 <div class="modal-footer">
										 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn btn-primary">Upload</button>
									 </div>
								 </form>

							 </div>
						 </div>
					 </div>
					 <!-- end button -->
					 <div class="modal fade" id="moveDocument" tabindex="-1"  aria-labelledby="myModalLabel">
						 <div class="modal-dialog">
							 <div class="modal-content">
								 <form action="" method="post">
									 <div class="modal-header">
										 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										 <h4 class="modal-title" id="myModalLabel">Move Documents</h4>
									 </div>
									 <div class="modal-body">
										<div id="form_id">
										</div>
									 </div>
									 <div class="modal-footer">
										 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn btn-primary">Move</button>
									 </div>
								 </form>

							 </div>
						 </div>
					 </div>
					 <!-- rename modal -->
					 <div class="modal fade" id="renameDocument" tabindex="-1"  aria-labelledby="myModalLabel">
						 <div class="modal-dialog">
							 <div class="modal-content">
								 <form action="{{ route('document-rename') }}" method="post">
									 <div class="modal-header">
										 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										 <h4 class="modal-title" id="myModalLabel">Rename</h4>
									 </div>
									 <div class="modal-body">
										 <!-- Hidden input -->
										 <input type="hidden" name="_token" value="{{ csrf_token() }}">
										 <input type="hidden" class="form-control" name="inputArray" id="inputRename">
										 <input type="hidden" class="form-control" name="currentdocumentpath" value="{{ $current->path }}">
										 <input type="hidden" class="form-control" name="olddocumentname"id="olddocumentname1">
										 <!-- End hidden input -->
										 <div class="form-group">
											 <label for="documentname">Folder Name</label>
											 <input type="text" class="form-control" name="documentrename" id="documentrename">
										 </div>

									 </div>
									 <div class="modal-footer">
										 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										 <button type="submit" class="btn btn-primary">Rename</button>
									 </div>
								 </form>

							 </div>
						 </div>
					 </div>
				 @endif
			 @endforeach

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <tbody>
                <tr>
				  <th style="width: 10px"></th>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Last Modified</th>
                </tr>
								@foreach($folders as $folder)
										<tr>
											<td><input type="checkbox" class="flat-red" name="checkbox[]" id="{{ $folder->nama_document}}" value="{{ $folder->id }}"></td>
											<td><i class='fa fa-folder'></i>
											<a id="golink" href="{{ route('supervisor-documents', ['iddocument' => $folder->id]) }}">{{ $folder->nama_document }}</a></td>
											<td>{{ $folder->owner }}</td></td>
											<td>{{ $folder->updated_at->format('d/m/Y') }}</td>
		                </tr>
								@endforeach
								@foreach($files as $file)
										<tr>
											<td><input type="checkbox" class="flat-red" name="checkbox[]" id="{{ $file->nama_document}}" value="{{ $file->id }}"></td>
											<td><i class='fa fa-file'></i>
											<a id="golink" href="storage/app/{{$file->path}}" >{{ $file->nama_document }}</a></td>
											<td>{{ $file->owner }}</td></td>
											<td>{{ $file->updated_at->format('d/m/Y') }}</td>
		                </tr>
								@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection
