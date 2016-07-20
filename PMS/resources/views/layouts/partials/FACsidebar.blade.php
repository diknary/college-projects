<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('assets/img/user-icon160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Documents</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">POB Standar</a></li>
                    <li><a href="#">POB Statistika</a></li>
                    <li><a href="#">POB Geofisika & Meteorolgi</a></li>
                    <li><a href="#">POB Biologi</a></li>
                    <li><a href="#">POB Kimia</a></li>
                    <li><a href="#">POB Matematika</a></li>
                    <li><a href="#">POB Ilmu Komputer</a></li>
                    <li><a href="#">POB Fisika</a></li>
                    <li><a href="#">POB Biokimia</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-upload'></i> <span>Publish</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('publish_POB') }}">POB Standar</a></li>
                    <li><a href="{{ url('publish_form') }}">Form</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
