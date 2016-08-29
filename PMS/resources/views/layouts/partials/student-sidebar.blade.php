<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 573px;">

    <section class="sidebar" style="height: 573px; overflow: hidden; width: auto;">

        <!-- Sidebar user panel (optional) -->
        @if (Session::has('NIM'))
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('assets/img/user-icon160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Session::get('studentName') }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i>Student</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('student-dashboard') }}"><i class='fa fa-dashboard'></i> <span>Dashboard</span></a></li>
            <li><a href="{{ url('student/documents') }}"><i class='fa fa-book'></i> <span>Documents</span></a></li>
            <li><a href="{{ url('student-upload') }}"><i class='fa fa-upload'></i> <span>Upload</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    </div>
    <!-- /.sidebar -->
</aside>
