<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title')
        <small>@yield('contentheader_description')</small>
    </h1>
    @if(Request::segment(2) == 'documents')
    <ol class="breadcrumb">
    @for ($i=0;$i < count($breads);$i++)
        <li><a href="{{ route(Request::segment(1).'/'.Request::segment(2), ['iddocument' => $breads[$i]['id_folder']]) }}"> {{ $breads[$i]['name'] }} </a></li>
    @endfor
    </ol>
    @endif
</section>