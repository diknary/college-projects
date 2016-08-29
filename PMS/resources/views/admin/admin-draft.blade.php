@extends('layouts.masters.admin')

@section('htmlheader_title')
  Home
@endsection


@section('main-content')
  <div class="container spark-screen">
    <div class="col-md-8 col-md-offset-1">
      @foreach($news as $new)
        <div  id="{{ $new->news_title }}">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h2 style="text-align: center">{{ $new->news_title }}</h2>
                <h5>Publish by : {{ $new->username }}
                  <span class="mailbox-read-time pull-right">{{ $new->created_at->format('d/m/Y')}}</span>
                </h5>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <div class="col-md-6">
                  <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('storage/app'.'/'.$new->image_path) }}" alt="">
                    </div>
                  </div>
                </div>
                <p style="padding: 0; white-space: pre-wrap;">
                  {{ $new->news_body }}
                </p>
              </div>

              <!-- /.mailbox-read-message -->
            </div>
            <div class="box-footer">
              <div class="pull-right">
                <a href="{{ route('delete-news', ['id' => $new->id]) }}">
                  <button type="submit" href="{{ route('delete-news', ['id' => $new->id]) }}" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Delete
                  </button>
                </a>
                <a href="{{ route('edit-news', ['id' => $new->id]) }}">
                  <button type="submit" href="{{ route('edit-news', ['id' => $new->id]) }}" class="btn btn-primary">
                    <i class="fa fa-pencil"></i> Edit
                  </button>
                </a>
              </div>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      @endforeach
    </div>
  </div>
@endsection

<!-- Page Script -->
