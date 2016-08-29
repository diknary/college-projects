<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 573px;">

    <section class="sidebar" style="height: 573px; overflow: hidden; width: auto;">

        <!-- Sidebar user panel (optional) -->
        @if (Session::has('id'))
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('assets/img/user-icon160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Session::get('staffName') }}</p>
                      <a href="#"><i class="fa fa-circle text-success"></i>Administrator</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('admin-dashboard') }}"><i class='fa fa-history'></i> <span>Recent</span></a></li>
            <li><a href="{{ url('admin/documents') }}"><i class='fa fa-book'></i> <span>Documents</span></a></li>
            <li class="treeview">
              <a href="#"><i class='fa fa-newspaper-o'></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a></a>
              <ul class="treeview-menu">
                  <li><a href="{{ url('/publish-news') }}"><i class="fa fa-pencil"></i>Write News</a></li>
                  <li><a href="{{ url('/list-news') }}"><i class="fa fa-list"></i>List News</a></li>
                  <li><a href="{{ url('/draft-news') }}"><i class="fa fa-save"></i>Draft</a></li>
              </ul>
            </li>
            {{-- <li class="treeview">
                <a href="#"><i class='fa fa-user'></i> <span>Operator</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('operator-add') }}"><i class="fa fa-circle-o"></i>Tambah Operator</a></li>
                    <li><a href="{{ url('operator-list') }}"><i class="fa fa-circle-o"></i>List Operator</a></li>
                </ul>
            </li> --}}
            <li><a href="{{ url('services') }}"><i class='fa fa-archive'></i> <span>Services</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    </div>
    <!-- /.sidebar -->
</aside>
