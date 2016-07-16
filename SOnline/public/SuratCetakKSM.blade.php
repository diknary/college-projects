<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Load CSS-->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
  <!--Load jQuery-->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  

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
					  <a class="navbar-brand" href="HomePage.html" style="margin-top:5px;margin-right:20px;width:40px;padding-top:5px;padding-bottom:5px;">
						<img alt="IPB" src="img/logo_ipb.png" style="height:40px;">
					  </a>
				  	<span style='display:block !important;margin-top:15px;font-size:12px; color: white; font-weight:bold;' >
						Surat Online Departemen Ilmu Komputer IPB
					</span>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-bell" style='margin-top:5px;color: white'></span></a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-out" style='margin-top:5px;font-weight:bold;color: white'> Logout</span></a></li>
					</ul>
					
				</div>
			</div>
		</nav>
			
		<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-2 sidenav">
				</div>
				<div class="col-sm-8"> 
					<div class="panel panel-default">
						<div class="panel-body" align="center" style='font-size:24px;font-weight:bold;'>
								Blanko Surat Cetak KSM
						</div>
						<div class="panel-footer">
							<!-- <div class="col-xs-2" align="left" style='font-weight:bold'>
							Dikna R Yahdi
							</div>
							<br>
							<div class="col-xs-2" align="left" style='font-weight:bold'>
							G64130106
							</div> -->
							<br>
							<div class="bs-example">
							<form class="form-horizontal" method="POST" action="{{ url('/form/submit') }}">
								{!! csrf_field() !!}
								
								<div class="form-group">
									<label class="control-label col-sm-2" for="inputNama">Nama Lengkap:</label>
									<div class="col-sm-9">
										<input type="text" name="name" class="form-control" id="inputNama" placeholder="Masukan Nama Lengkap">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="inputNIM">NIM:</label>
									<div class="col-sm-9">
										<input type="text" name="nim" class="form-control" id="inputNIM" placeholder="Masukan NIM">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="inputTingkat">Tingkat/Semester:</label>
									<div class="col-sm-9">
										<input type="text" name="tingkat" class="form-control" id="inputTingkat" placeholder="Masukan Tingkat/Semester">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="inputKeperluan">Untuk Keperluan:</label>
									<div class="col-sm-9">
										<textarea rows="2" name="keperluan" class="form-control" id="inputKeperluan" placeholder="Masukan Keperluan"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-9" align="left">
										<label class="checkbox-inline">
											<input type="checkbox" value="Setuju">Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
										</label>
									</div>
								</div>
								<div class="form-group" align="left">
									<div class="col-sm-offset-2 col-sm-9">
										<input type="submit" class="btn btn-primary" value="Kirim">
									</div>
								</div>
							</form>
						</div>
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