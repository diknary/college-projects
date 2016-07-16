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
						<li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out" style='margin-top:5px;font-weight:bold;color: white'> Logout</span></a></li>
					</ul>
					
				</div>
			</div>
		</nav>
			
		<div class="container-fluid">    
			<div class="row content">
				<div class="col-sm-2 sidenav">
				</div>
				<div class="col-sm-8"> 
					<div class="panel panel-default">
						<div class="panel-body" align="center" style='font-size:24px;font-weight:bold;'>
							Konfirmasi Surat 
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
							<table class="table table-hover">
								<thead>
								  <tr>
									<th>Tanggal Submit</th>
									<th>Nama</th>
									<th>Surat</th>
									<th>Konfirmasi</th>
								  </tr>
								</thead>
								<tbody>
								@foreach($view as $row)
								  <tr>
									<td>{{$row->id}}</td>
									<td>{{$row->name}}</td>
									<td>{{$row->letter_name}}</td>
									<td>
										<form method="GET" action="{{ url('/verify') }}">
										<input type="hidden" name="id" value='{{$row->id}}'>
										<button type="button" class="btn btn-primary btn-sm">View</button>
										<input type="submit" name="accept" class="btn btn-success btn-sm" value="Accept"></input>
										<input type="submit" name="" class="btn btn-danger btn-sm" value="Decline"></input>
										</form>
									</td>
								  </tr>
								 @endforeach
								</tbody>
							</table>
							
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