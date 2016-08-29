@extends('layouts.masters.student')

@section('htmlheader_title')
	Dashboard
@endsection


@section('main-content')
<div class="row">	
  <div class="col-xs-12">
	<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Status Permohonan</h3>
					</div>

				<!-- /.box-header -->
				<div class="box-body">
						<table id="doctable2" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th style="width: 1px">No.</th>
								<th>Form</th>
								<th>Status</th>
								<th>Tanggal Upload</th>
							</tr>
							</thead>
							<tbody>
							@foreach($forms as $form)
								<tr>
									<td>{{$count++}}</td>
									<td> {{ $form->nama_form }}</td>
									@if ($form->status == "Telah diupload")
										<td><span class="label label-warning">Telah diupload</span></td>
									@endif
									@if ($form->status == "Sedang diproses")
										<td><span class="label label-info">Sedang diproses</span></td>
									@endif
									@if ($form->status == "Telah selesai diproses")
										<td><span class="label label-warning">Telah selesai diproses</span></td>
									@endif
									<td><span>20 Juni 2016</span></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-body -->
				</div>
				</div>

@endsection
