@extends('layouts.masters.student')

@section('htmlheader_title')
	Upload
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-1">
				<div class="panel panel-default">
					<div class="box box-primary">
						<div class="box-header with-border">
						<h3 class="box-title">Upload File (.zip)</h3>
						</div>

						<form action="{{ route('form-upload') }}" method="post" enctype="multipart/form-data">
							<div class="box-body">

								<div class="form-group">
								  <label for="POBname">Kategori</label>
									<select id="kategori-form" name="kategori-form" class="form-control">
										<option value="FRM-09-01a-01 - Permohonan Surat Keterangan">FRM-09-01a-01 - Permohonan Surat Keterangan</option>
                    <option value="FRM-09-01b-01 - Surat Keterangan Aktif Kuliah Untuk Tunjangan Anak">FRM-09-01b-01 - Surat Keterangan Aktif Kuliah Untuk Tunjangan Anak</option>
                    <option value="FRM-09-02-02 - Verifikasi Dokumen Surat Keterangan">FRM-09-02-02 - Verifikasi Dokumen Surat Keterangan</option>
                    <option value="FRM-10-01-01 - Formulir Mahasiswa Yang Mengajukan Cuti Akademik">FRM-10-01-01 - Formulir Mahasiswa Yang Mengajukan Cuti Akademik</option>
                    <option value="FRM-10-02-02 - Verifikasi Dokumen Surat Cuti Akademik">FRM-10-02-02 - Verifikasi Dokumen Surat Cuti Akademik</option>
										<option value="FRM-11-01-01 - Formulir Mahasiswa Yang Mengajukan Aktif Kembali">FRM-11-01-01 - Formulir Mahasiswa Yang Mengajukan Aktif Kembali</option>
										<option value="FRM-11-02-02 - Verifikasi Dokumen Surat Aktif Kembali">FRM-11-02-02 - Verifikasi Dokumen Surat Aktif Kembali</option>
										<option value="FRM-12-01-01 - Formulir Data Mahasiswa Yang Mengajukan Undur Diri">FRM-12-01-01 - Formulir Data Mahasiswa Yang Mengajukan Undur Diri</option>
										<option value="FRM-12-02-02 - Verifikasi Dokumen Surat Undur Diri">FRM-12-02-02 - Verifikasi Dokumen Surat Undur Diri</option>
										<option value="FRM-13-01-01 - Formulir Data Mahasiswa Yang Mengajukan Sidang Komisi Pascasarjana">FRM-13-01-01 - Formulir Data Mahasiswa Yang Mengajukan Sidang Komisi Pascasarjana</option>
										<option value="FRM-13-02-02 - Verifikasi Dokumen Surat Sidang Komisi Pascasarjana">FRM-13-02-02 - Verifikasi Dokumen Surat Sidang Komisi Pascasarjana</option>
										<option value="FRM-14-01-01 - Formulir Data Mahasiswa Yang Mengajukan Perpanjangan Studi">FRM-14-01-01 - Formulir Data Mahasiswa Yang Mengajukan Perpanjangan Studi</option>
										<option value="FRM-14-02-02 - Verifikasi Dokumen Surat Perpanjangan Studi">FRM-14-02-02 - Verifikasi Dokumen Surat Perpanjangan Studi</option>
										<option value="FRM-15-01-01 - Formulir Data Mahasiswa Yang Mengajukan Surat Keterangan Lulus">FRM-15-01-01 - Formulir Data Mahasiswa Yang Mengajukan Surat Keterangan Lulus</option>
										<option value="FRM-15-02-02 - Verifikasi Dokumen Surat Keterangan Lulus">FRM-15-02-02 - Verifikasi Dokumen Surat Keterangan Lulus</option>
										<option value="FRM-16-01-01 - Formulir Data Mahasiswa Yang Mengajukan Surat Percepatan Ijazah">FRM-16-01-01 - Formulir Data Mahasiswa Yang Mengajukan Surat Percepatan Ijazah</option>
										<option value="FRM-16-02-02 - Verifikasi Dokumen Surat Percepatan Ijazah">FRM-16-02-02 - Verifikasi Dokumen Surat Percepatan Ijazah</option>
										<option value="FRM-17-01-01 - Formulir Data Mahasiswa Yang Mengajukan Legalisir">FRM-17-01-01 - Formulir Data Mahasiswa Yang Mengajukan Legalisir</option>
										<option value="FRM-17-02-02 - Verifikasi Dokumen Legalisir">FRM-17-02-02 - Verifikasi Dokumen Legalisir</option>
                  </select>
								</div>

								<div style='display:show' id="FRM-09-01a-01" class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<strong>Persyaratan Surat Pembuatan Visa</strong>
										<ol>
											<li>Surat Keterangan Departemen</li>
											<li>Scan SPP</li>
											<li>Scan KTM</li>
										</ol>
										<strong>Persyaratan Surat Aktif / Beasiswa</strong>
										<ol>
											<li>Surat Rekomendasi dari Departemen</li>
											<li>Scan SPP</li>
											<li>Scan KTM</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-09-01a-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id="FRM-09-01b-01" class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Scan SPP</li>
											<li>Scan KTM</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-09-01b-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-09-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-09-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-10-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Surat Permohonan Cuti dari mahasiswa dan wali</li>
											<li>Surat Pengantar Departemen</li>
											<li>Scan SPP</li>
											<li>Scan KTM</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-10-01-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-10-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-10-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-11-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Surat Cuti</li>
											<li>Surat Pengantar Departemen</li>
											<li>Scan SPP</li>
											<li>Scan KTM</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-11-0a-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-11-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-11-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-12-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Surat Permohonan Undur Diri dari mahasiswa dan orang tua/wali</li>
											<li>Surat Pengantar Departemen</li>
											<li>Scan SPP</li>
											<li>KTM Asli</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-12-01-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-12-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-12-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-13-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Surat Pengajuan Sidang Komisi dari program studi</li>
											<li>Bukti Lunas SPP</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-13-01-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-13-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-13-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-14-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Surat Pernyataan Rencana Penyelesaian Studi</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-14-01-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-14-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-14-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-15-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Pas Foto</li>
											<li>Surat Keterangan dari ketua departemen yang menyatakan telah menyelesaikan semua kewajiban administrasi dan akademik</li>
											<li>Tanda bukti pembayaran SPP sampai semester terakhir</li>
											<li>Transkrip kumulatif dari departemen</li>
											<li>Lembar pengesahan skripsi yang telah ditandatangani pembimbing dan ketua departemen</li>
											<li>Skripsi</li>
											<li>Bukti Pembayaran Wisuda</li>
											<li>Kuisioner Survey Tingkat Kepuasan Lulusan FMIPA</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-15-01-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-15-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-15-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-16-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Surat Keterangan Lulus Sarjana</li>
											<li>Bukti Pembayaran Wisuda</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-16-01-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-16-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-16-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-17-01-01' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ol>
											<li>Scan Dokumen</li>
										</ol>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Semua dokumen dalam format .pdf</br/></li>
											<li>Semua dokumen digabungkan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-17-01-01 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div style='display:none' id='FRM-17-02-02' class="form-group">
									<label>PERSYARATAN DOKUMEN LAIN YANG HARUS DIUPLOAD BERSAMA</label>
									<p>
										<ul>
											<li>Tidak ada persyaratan</li>
										</ul>
										<strong>Format Upload</strong><br/>
										<ul>
											<li>Dokumen dalam format .pdf</br/></li>
											<li>Dokumen disimpan dalam format .zip<br/></li>
											<li>File .zip diberi nama dengan format : <b>FRM-17-02-02 - NIM.zip</b></li>
										</ul>
									</p>
								</div>

								<div class="form-group">
									<!-- Hidden input -->
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="nim" id="nim" value="{{ Session::get('NIM') }}">
									<!-- End hidden input -->
								  <label>File upload</label>
								  <input type="file" name="uploadform" id="uploadform" accept=".zip">
								</div>


								<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
								<button type="submit" class="btn btn-primary" id="button">Submit</button>
							</div>
						</form>

					</div>
			</div>
		</div>
	</div>
</div>


@endsection

<!-- Page Script -->
