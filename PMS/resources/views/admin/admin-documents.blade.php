@extends('layouts.masters.admin')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
<div class="row">	
  <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            @foreach ($currentdocument as $current)
            <div class="box-header">
                      <h3 class="box-title">{{ $current->nama_document}}</h3>
                  </div>
            @endforeach

            <div class="box-body">
              <table id="doctable2" class="table table-bordered table-striped">
                <thead>
                <tr>
									<th style="width: 10px"></th>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Last Modified</th>
                </tr>
                </thead>
                <tbody>
								@foreach($folders as $folder)
									<tr>
										<td><input type="checkbox" class="flat-red" name="checkbox[]" id="{{ $folder->nama_document}}" value="{{ $folder->id }}"></td>
										<td><i class='fa fa-folder'></i>
										<a id="golink" href="{{ route('admin/documents', ['iddocument' => $folder->id]) }}">{{ $folder->nama_document }}</a></td>
										<td>{{ $folder->owner }}</td></td>
										<td>{{ $folder->updated_at->format('d/m/Y') }}</td>
	                				</tr>
								@endforeach
                @foreach($files as $file)
                    <tr>
                      <td><input type="checkbox" name="checkbox[]" id="{{ $file->nama_document}}" value="{{ $file->id }}"></td>
                      <td><i class='fa fa-file'></i>
                      <a id="golink" href="{{url('storage/app/'.$file->path)}}" >{{ $file->nama_document }}</a></td>
                      <td>{{ $file->owner }}</td>
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
 </div>       
@endsection
