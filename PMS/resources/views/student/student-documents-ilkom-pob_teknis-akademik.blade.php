@extends('layouts.student')

@section('htmlheader_title')
	POB Teknis
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
                   <td><i class='fa fa-file-pdf-o'></i>
                   <a id="golink" href="{{ url('storage/Dep Ilmu Komputer/POB Teknis/POB Bidang Akademik/POB-KOM-PP-01-Pelaksanaan Kegiatan Sosialisasi Akademik.pdf') }}">POB-KOM-PP-01-Pelaksanaan Kegiatan Sosialisasi Akademik.pdf</a></td>
                   <td>Penanggung Jawab</td></td>
                   <td>11-7-2014</td>
                   <td>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                   </td>
                </tr>
								<tr class="pointer" data-href="">
	                  <td><i class='fa fa-file-pdf-o'></i>
	                  <a id="golink" href="">POB-KOM-PP-02-Persiapan Pekuliahan dan Praktikum.pdf</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
                    <td>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                    </td>
	              </tr>
								<tr class="pointer" data-href="">
	                  <td><i class='fa fa-file-pdf-o'></i>
	                  <a id="golink" href="">POB-KOM-PP-03-Monitoring Pelaksanaan Perkuliahan.pdf</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
                    <td>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">View</a>
                     <a class="btn btn-info btn-xs" type="button" href="{{ url('storage/POB-FMIPA.pdf') }}">Download</a>
                    </td>
	              </tr>
								<tr class="pointer" data-href="">
	                  <td><i class='fa fa-file-pdf-o'></i>
	                  <a id="golink" href="">POB-KOM-PP-04-Penentuan Jadwal Kuliah atau Praktikum Pengganti.pdf</a></td>
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
