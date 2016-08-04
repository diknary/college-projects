@extends('layouts.student')

@section('htmlheader_title')
	Documents
@endsection


@section('main-content')
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Dokumen</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Last Modified</th>
                </tr>
							 @foreach ($folders as $folder)
               <tr class="pointer" data-href="{{ route('student-documents' , ['idfolder' => $folder->id])}}" >
                  <td><i class='fa fa-folder'></i>
                  {{$folder->nama_folder}}</td>
                  <td>{{$folder->owner}}</td></td>
                  <td>11-7-2014</td>
               </tr>
               @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection
