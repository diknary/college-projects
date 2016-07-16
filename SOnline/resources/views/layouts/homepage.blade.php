<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Load CSS-->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}"/>
  <!--Load jQuery-->
  <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  

</head>
<body>

            <!-- header -->
			
		<div id="header">
            <div id="headerNotice" style="float:right">
				<span style="font-size:7pt;">
                </span> 
			</div>
			
            <h2 style='float: top; margin-left: 380px; color: white;' >&nbsp;<!--KRS Online Mahasiswa Program Sarjana IPB--></h2>
        </div>

		
		<nav id="header" class="navbar navbar-default navbar-fixed-top" style="border:0;background-color:rgb(2,95,154);">
			<div class="container-fluid">
				<div class="navbar-header">
					  <a class="navbar-brand" href="{{ url('/home') }}" style="margin-top:5px;margin-right:20px;width:40px;padding-top:5px;padding-bottom:5px;">
						<img alt="IPB" src="{{ asset('img/logo_ipb.png') }}" style="height:40px;">
					  </a>
				  	<span style='display:block !important;margin-top:15px;font-size:12px; color: white; font-weight:bold;' >
						Surat Online Departemen Ilmu Komputer IPB
					</span>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ url('/status') }}" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-bell" style='margin-top:5px;color: white'></span></a></li>
						<li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out" style='margin-top:5px;font-weight:bold;color: white'> Logout</span></a></li>
					</ul>
					<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
				</div>
			</div>
		</nav>
		<!-- end header -->
			
		<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-2 sidenav">
				</div>
				<div class="col-sm-8 text-left"> 
					<div class="panel panel-default">
						<div class="panel-heading">
						<h3>Layanan Pembuatan Surat Akademik</h3>
						<h5>Program S1 Ilmu Komputer</h5>
						</div>
						<div class="panel-body">
						<p>
						<ul style="list-style-type:decimal;">
							<a href="SuratPemohonanBuktiPembayaranSPP.html"><li>Surat Pemohonan Bukti Pembayaran SPP</li></a>
							<a href="SuratPermintaanDataUntukTugasAkhir.html"><li>Surat Permintaan Data untuk Tugas Akhir</li></a>
							<a href="SuratPermintaanDataUntukTugasMataKuliah.html"><li>Surat Permintaan Data untuk Tugas Mata Kuliah</li></a>
							<a href="#"><li>Surat Peminjaman Ruangan</li></a>
							<a href="SuratPengantaruntukAktifKembalisetelahCuti.html"><li>Surat Pengantar untuk Aktif Kembali setelah Cuti</li></a>
							<a href="SuratPengantaruntukAktifKembalisetelahNonAktif.html"><li>Surat Pengantar untuk Aktif Kembali setelah Non Aktif</li></a>
							<a name = "surataktif" href="SuratKeteranganAktifKuliah.html"><li>Surat Keterangan Aktif Kuliah</li></a>
							<a href="SuratPermohonanUjianSusulan.html"><li>Surat Permohonan Ujian Susulan</li></a>
							<a href="{{ url('/form/letter_01') }}"><li>Surat Cetak KSM</li></a>
							<a href="SuratCetakTranskripNilai.html"><li>Surat Cetak Transkrip Nilai</li></a>
							<a href="SuratKeteranganTidakMengikutiKegiatanKurikuler.html"><li>Surat Keterangan Tidak Mengikuti Kegiatan Kurikuler</li></a>
							<a href="SuratIjinTidakKuliah.html"><li>Surat Ijin Tidak Kuliah (sakit/kegiatan)</li></a>
							<a href="SuratKelalaianPembayaranSPP.html"><li>Surat Kelalaian Pembayaran SPP</li></a>
							<a href="SuratPermohonanKRSManual.html"><li>Surat Permohonan KRS Manual</li></a>
							<a href="SuratPermohonanNilaiMataKuliah.html"><li>Surat Permohonan Nilai Mata Kuliah</li></a>
							<a href="SuratPembatalanMataKuliah.html"><li>Surat Pembatalan Mata Kuliah</li></a>
							<a href="SuratPengantar.html"><li>Surat Pengantar (pembuatan visa)</li></a>
							<a href="SuratPengubahanMinor.html"><li>Surat Pengubahan Minor-SC</li></a>
							<a href="SuratPermohonanPengunduranDiri.html"><li>Surat Pengantar Permohonan Pengunduran Diri</li></a>
							<a href="SuratPermohonanCuti.html"><li>Surat Permohonan Cuti</li></a>
							<a href="SuratPermohonanDropOut.html"><li>Surat Permohonan Drop Out</li></a>
							<a href="SuratPermohonanPerpanjanganStudi.html"><li>Surat Pengantar Permohonan Perpanjangan Studi</li></a>
							<a href="SuratPerubahanPembimbing.html"><li>Surat Perubahan Pembimbing</li></a>
							<a href="SuratRekomendasiBeasiswa.html"><li>Surat Rekomendasi Beasiswa</li></a>
							<a href="SuratPenambahanKapasitasKelas.html"><li>Surat Penambahan Kapasitas Kelas</li></a>
							<a href="SuratKeteranganBerkelakuanBaik.html"><li>Surat Keterangan Berkelakuan Baik</li></a>
							<a href="SuratKeteranganPembimbingTugasAkhir.html"><li>Surat Keterangan Pembimbing 2 Tugas Akhir</li></a>
							<a href="SuratKeteranganKTMHilang.html"><li>Surat Keterangan KTM Hilang</li></a>
						</ul>
						</p>
						</div>
					</div>
				</div>
				<div class="col-sm-2 sidenav">
				</div>
			</div>
		</div>
		
		<div class="container">
			<hr>
		</div>

		<footer class="container-fluid text-center">
			<p>Surat Online Mahasiswa Ilmu Komputer</p>
		</footer>

</body>
</html>