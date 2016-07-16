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
                <div id="headerNotice" style="float:right"> <span style="font-size:7pt;">
                         
                         </span> </div>
                <h2 style='float: top; margin-left: 380px; color: white;' >&nbsp;<!--KRS Online Mahasiswa Program Sarjana IPB--></h2>
            </div>

		
			<nav id="header" class="navbar navbar-default navbar-fixed-top" style="border:0;background-color:rgb(2,95,154);">
			  <div class="container-fluid">
				<div class="navbar-header">
					  <a class="navbar-brand" href="#" style="margin-top:5px;margin-right:20px;width:40px;padding-top:5px;padding-bottom:5px;">
						<img alt="IPB" src="img/logo_ipb.png" style="height:40px;">
					  </a>
				  	<span style='display:block !important;margin-top:15px;font-size:12px; color: white; font-weight:bold;' >
						Surat Online Departemen Ilmu Komputer IPB
					</span>
				</div>
			  </div>
			</nav>
		
			

            <!-- end header -->


<div class="container">
<div class="row">
	
  <div class="col-sm-8">
	<br>
	<div class="panel panel-default">
	<div class="panel-body">
    <div class="bs-header">Surat Online</div>
        
        <div class="bs-callout bs-callout-info">
            <p style="font-weight:bold;">Berikut ini adalah hal-hal yang perlu diperhatikan oleh mahasiswa : </p>
				<p>
			<ul style="list-style-type:decimal;">
			<li>Layanan ini hanya ditujukan untuk mahasiswa Ilmu Komputer IPB</li>
			<li>Login menggunakan akun krs IPB</li>
			<li>Surat dapat diproses apabila data sudah di verifikasi</li>
			<li>Pengambilan surat tunggu konfirmasi dari admin</li>
			</ul>
				</p>
            
        </div>
		</div>
		</div>
  </div>
  <div class="col-sm-4">
	<br>
	<div class="panel panel-default">
	<div class="panel-body">
    <form class="form-signin" method="POST" action="{{ url('/auth') }}">
		{!! csrf_field() !!}
        <h3 class="form-signin-heading">Login</h3>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="Username" name="name" id="inputUsername" class="form-control" placeholder="Username"> <!--required autofocus-->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"> <!--required-->
		<br>
        <div>
			<button class="btn btn-lg btn-primary btn-block" type="submit" style='margin-bottom:5px;'>Login</button>
		</div>
    </form>
	<hr>
	<div class="well" style="font-size:12px;padding:10px; font-weight:bold;">
       <p>Jangan memberikan akun login (username dan password) anda pada siapapun.
		Keamanan data anda terletak pada anda sendiri.
		</p>
    </div>
	</div>
	</div>
  </div>
</div>
<hr>
</div>

<footer class="container-fluid text-center">
  <p>Surat Online Mahasiswa Ilmu Komputer</p>
</footer>

</body>
</html>
