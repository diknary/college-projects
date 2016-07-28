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
								<tr class="pointer" data-href="google.com">
                   <td><i class='fa fa-folder'></i>
                   <a id="golink" href="#">Departemen Statistika</a></td>
                   <td>Penanggung Jawab</td></td>
                   <td>11-7-2014</td>
                </tr>
								<tr class="pointer" data-href="google.com">
	                  <td><i class='fa fa-folder'></i>
	                  <a id="golink" href="#">Departemen Geofisika dan Meteorologi</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
	              </tr>
								<tr class="pointer" data-href="google.com">
	                  <td><i class='fa fa-folder'></i>
	                  <a id="golink" href="#">Departemen Biologi</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
	              </tr>
								<tr class="pointer" data-href="google.com">
	                  <td><i class='fa fa-folder'></i>
	                  <a id="golink" href="#">Departemen Kimia</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
	              </tr>
								<tr class="pointer" data-href="google.com">
	                  <td><i class='fa fa-folder'></i>
	                  <a id="golink" href="#">Departemen Matematika</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
	              </tr>
								<tr class="pointer" data-href="{{ url('student-documents/ilkom') }}">
	                  <td><i class='fa fa-folder'></i>
	                  <a id="golink" href="{{ url('student-documents/ilkom') }}">Departemen Ilmu Komputer</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
	              </tr>
								<tr class="pointer" data-href="google.com">
	                  <td><i class='fa fa-folder'></i>
	                  <a id="golink" href="#">Departemen Fisika</a></td>
	                  <td>Penanggung Jawab</td></td>
	                  <td>11-7-2014</td>
	              </tr>
               <tr class="pointer" data-href="google.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="">Departemen Bioimia</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr class="pointer" data-href="facebook.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">FMIPA</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-8-2014</td>
                </tr>
                <tr class="pointer" data-href="facebook.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">MOM Rapat</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
								<tr class="pointer" data-href="facebook.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">Pedoman Mutu</a></td>
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
