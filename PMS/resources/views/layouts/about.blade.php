<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>Portal Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/AdminLTE.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/skins/_all-skins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skins/_all-skins.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><b>Portal Management System</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}" class="smoothScroll">Beranda</a></li>
                <!-- <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Arsip
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">MOM Rapat</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                  </ul>
                </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              {{-- <li>
                  <input type="text" class="form-control">
              </li>
              <li>
                  <button type="button" class="btn btn-info btn-flat">Search</button>
              </li> --}}

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                @else
                    <li><a href="{{ url('/student-dashboard') }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<!-- FEATURES WRAP -->
<div id="news">
  <div class="container">
    <div class="row">

      <!-- Content Header (Page header) -->
      <section class="content-header">

      </section>

  <!-- Main content -->
      <section class="content">

        <div class="row">

          <div  id="tentang" class="col-md-8 col-lg-offset-2">
            <div class="box box-primary">

              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-read-info">
                  <h2 style="text-align:center"><strong>Tentang Portal Management System FMIPA</strong></h2>
                  {{-- <h5>Publish by : Admin FMIPA
                    <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5> --}}
                </div>
                <!-- /.mailbox-read-info -->

                <!-- /.mailbox-controls -->
                <div style="color: #000" class="mailbox-read-message">
                  <strong>General :</strong>
                  <p>Portal Management System (PMS) FMIPA IPB dibuat untuk memenuhi kebutuhan ISO FMIPA beserta delapan departemen yang ada di FMIPA. PMS dibuat sebagai tempat untuk berbagi dokumen ISO antar pengurus ISO, pegawai, dan mahasiswa. Serta sebagai media informasi seputar ISO FMIPA.</p>
                  <strong>Mahasiswa :</strong>
                  <p>Mahasiswa dapat melihat atau mengunduh dokumen berupa formulir atau POB (Prosedur Operasional Baku) yang ada di FMIPA maupun di delapan departemen lainnya pada menu <i>Documents</i> setelah melakukan <a href="{{ url('/login') }}">login</a>. Mahasiswa login dengan menggunakan akun mahasiswa IPB. Mahasiswa juga dapat mengunggah formulir akademik yang telah diisi untuk diproses oleh pihak Tata Usaha FMIPA.</p>
                  <strong>Staff :</strong>
                  <p>Staff dapat melihat atau mengunduh dokumen berupa formulir atau POB (Prosedur Operasional Baku) yang ada di FMIPA maupun di delapan departemen lainnya pada menu <i>Documents</i> setelah melakukan <a href="{{ url('/login') }}">login</a>. Staff login dengan menggunakan akun staff IPB. `Staff juga dapat mengunggah formulir akademik, kepegawaian, tata usaha, ataupun sarana prasarana untuk diproses oleh pihak Tata Usaha FMIPA </p>

                </div>
                <!-- /.mailbox-read-message -->
              </div>

            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->


    </div>

  </div>
</div><!--/ .container -->




    <section id="contact" name="contact"></section>
    <!-- <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>{{ trans('adminlte_lang::message.address') }}</h3>
                <p>
                    Gedung FMIPA IPB<br/>
                    Jalan Meranti<br/>
                    Kampus IPB Dramaga<br/>
                    Bogor
                    16630
                </p>
            </div>

            <div class="col-lg-7">
                <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
                <br>
                <form role="form" action="#" method="post" enctype="plain">
                    <div class="form-group">
                        <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                        <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                    </div>
                    <div class="form-group">
                        <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                        <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                        <textarea class="form-control" name="Message" rows="3"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                </form>
            </div>
        </div>
    </div> -->
  <div id="c">
      <div class="container">
          <p>
              FMIPA IPB. Jalan Meranti Kampus IPB Dramaga Bogor<br/>
              Tlp/Fax : 0251-8625481 | E-mail: fmipa@ipb.ac.id
              <br/>

          </p>

      </div>
  </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script>
      $('.carousel').carousel({
          interval: 3500
      })
  </script>
</body>
</html>
