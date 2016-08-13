@extends('layouts.masters.student')

@section('htmlheader_title')
	Dashboard
@endsection


@section('main-content')

	<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Status Permohonan</h3>

				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
							<tr>
								<th>No.</th>
								<th>Form</th>
								<th>Status</th>
								<th>Tanggal Upload</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>1</td>
								<td>FRM-09-02-02 - Verifikasi Dokumen Surat Keterangan</td>
								<td><span class="label label-warning">Telah Diupload</span></td>
								<td>
									<span>20 Juni 2016</span>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>FRM-09-01a-01 - Permohonan Surat Keterangan</td>
								<td><span class="label label-info">Sedang diproses</span></td>
								<td>
									<span>18 Juni 2016</span>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>FRM-11-02-02 - Verifikasi Dokumen Surat Aktif Kembali</td>
								<td><span class="label label-success">Telah selesai diproses</span></td>
								<td>
									<span>09 Mei 2016</span>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>FRM-11-01-01 - Formulir Mahasiswa Yang Mengajukan Aktif Kembali</td>
								<td><span class="label label-success">Telah selesai diproses</span></td>
								<td>
									<span>07 Mei 2016</span>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.box-body -->

			</div>

@endsection
