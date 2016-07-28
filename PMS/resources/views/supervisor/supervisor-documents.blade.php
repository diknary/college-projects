@extends('layouts.pj')

@section('htmlheader_title')
	Home
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
                <tbody>
                <tr>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Last Modified</th>
                </tr>
               <tr class="pointer" data-href="google.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">Dep Biokimia</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
               </tr>
               <tr class="pointer" data-href="google.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">Dep Biologi</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr class="pointer" data-href="google.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">Dep Fisika</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr class="pointer" data-href="komdoc">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">Dep Ilmu Komputer</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                 <tr class="pointer" data-href="google.com">
                  <td><i class='fa fa-folder'></i>
                  <a id="golink" href="#">Dep Geofisika Meteorologi</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr class="pointer" data-href="facebook.com">
                  <td><i class='fa fa-folder'></i>
                  <a  id="golink" href="##">Dep Kimia</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-8-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">Dep Matematika</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">Dep Statistika</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">Dokumen Eksternal</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">Dokumen Kadaluarsa</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr class="pointer" data-href="mipadoc">
                  <td><i class='fa fa-folder'></i>
                  <a href="#">Fakultas MIPA</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">Hasil Audit Eksternal</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">MOM Rapat</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">Pedoman Mutu</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">POB Standar</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td><i class='fa fa-folder'></i>
                  <a href="#">SK Organisasi SMM</a></td>
                  <td>Penanggung Jawab</td></td>
                  <td>11-7-2014</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@endsection
