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
                    <p>{{ Session::get('supervisorName') }}</p>

                      <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-history'></i> <span>Recent</span></a></li>
            <li><a href="{{ url('documents') }}"><i class='fa fa-book'></i> <span>Documents</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    </div>
    <!-- /.sidebar -->
</aside>
