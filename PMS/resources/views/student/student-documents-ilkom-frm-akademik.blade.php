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
                  <th></th>
                </tr>
								<tr class="pointer" data-href="">
                   <td><i class='fa fa-file-word-o'></i>
                   <a id="golink" href="{{ url('storage/Dep Ilmu Komputer/FRM/Bidang Akademik/POB_KOM-PP_01_FRM-01-00 Undangan Kegiatan.docx') }}">POB_KOM-PP_01_FRM-01-00 Undangan Kegiatan.docx</a></td>
                   <td>Penanggung Jawab</td></td>
                   <td>11-7-2014</td>
                   <td>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                   </td>
                </tr>
								<tr class="pointer" data-href="{{ url('student-documents/ilkom/pob-teknis') }}">
	                  <td><i class='fa fa-file-word-o'></i>
	                  <a id="golink" href="">POB_KOM-PP_01_FRM-02-00 MPD Daftar Kehadiran Mahasiswa.docx</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
                    <td>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                   </td>
	              </tr>
								<tr class="pointer" data-href="{{ url('student-documents/ilkom/pob-teknis') }}">
	                  <td><i class='fa fa-file-word-o'></i>
	                  <a id="golink" href="">POB_KOM-PP_01_FRM-03-00 MPD Daftar Kehadiran Dosen.docx</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
                    <td>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                   </td>
	              </tr>
								<tr class="pointer" data-href="{{ url('student-documents/ilkom/pob-teknis') }}">
	                  <td><i class='fa fa-file-word-o'></i>
	                  <a id="golink" href="">POB_KOM-PP_02_FRM-01-00 Check List Kesiapan Perlengkapan Kuliah.docx</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
                    <td>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
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
