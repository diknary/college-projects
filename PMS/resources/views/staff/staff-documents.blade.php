@extends('layouts.masters.staff')

@section('htmlheader_title')
	Documents
@endsection


@section('main-content')
	<div class="col-xs-12">
          <div class="box">
            @foreach ($currentdocument as $current)
            <div class="box-header">
              <h3 class="box-title">{{ $current->nama_document}}</h3>
            </div>
            @endforeach

            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <tbody>
                <tr>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Last Modified</th>
                </tr>
                @foreach($folders as $folder)
                    <tr>
                      <td><i class='fa fa-folder'></i>
                      <a id="golink" href="{{ route('staff-documents', ['iddocument' => $folder->id]) }}">{{ $folder->nama_document }}</a></td>
                      <td>{{ $folder->owner }}</td>
                      <td>{{ $folder->updated_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
                @foreach($files as $file)
                    <tr>
                      <td><i class='fa fa-file'></i>
                      <a id="golink" href="storage/app/{{$file->path}}" >{{ $file->nama_document }}</a></td>
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
@endsection
