@extends('layouts.masters.admin')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="col-md-10 col-md-offset-0">
			<div class="panel panel-default">
				<div class="box box-primary">
					<form class="" action="" method="post" enctype="multipart/form-data">
						<div class="box-header with-border">
							<h3 class="box-title">Post Berita</h3>
						</div>
						<div class="box-body">
							<!-- Hidden input -->
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="username" id="username" value="{{ Session::get('supervisorName') }}">
							<!-- / hidden input -->
	            <div class="form-group">
	              <input class="form-control" placeholder="Judul" name="title">
	            </div>
	            <div class="form-group">
	              <textarea id="compose-textarea" class="form-control" style="height: 300px" name="body"></textarea>
	            </div>
	            <div class="form-group">
	              <div class="btn btn-default btn-file">
	                <i class="fa fa-image"></i> Add Image
	                <input type="file" name="image" accept="image/*">
	              </div>
	            </div>
	          </div>
						<div class="box-footer">
	            <div class="pull-right">
	              <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
	              <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
	            </div>
	          </div>
					</form>
				</div>
			</div>
		</div>
	</div>


@endsection

<!-- Page Script -->
