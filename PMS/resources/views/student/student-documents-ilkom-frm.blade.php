@extends('layouts.student')

@section('htmlheader_title')
	Form
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
								<tr class="pointer" data-href="{{ url('student-documents/ilkom/frm/akademik') }}">
                   <td><i class='fa fa-folder'></i>
                   <a id="golink" href="{{ url('student-documents/ilkom/frm/akademik') }}">Bidang Akademik</a></td>
                   <td>Penanggung Jawab</td></td>
                   <td>11-7-2014</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection
