@extends('layouts.masters.admin')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="col-md-10 col-md-offset-0">
			<div class="panel panel-default">
				<div class="box box-primary">
					<form class="" action="{{ route('news-post') }}" method="post" enctype="multipart/form-data">
						<div class="box-header with-border">
							<h3 class="box-title">Post Berita</h3>
						</div>
						<div class="box-body">
							<!-- Hidden input -->
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="username" id="username" value="{{ Session::get('staffName') }}">
							<!-- / hidden input -->
	            <div class="form-group">
								<label for="posttitle">Judul :</label>
	              <input class="form-control" name="title">
	            </div>
	            <div class="form-group">
								<label for="postbody">Isi :</label>
								<p>
									<textarea id="compose-textarea" class="form-control" style="height: 300px" name="body"></textarea>
								</p>
	            </div>
	            <div class="form-group">
								<label for="" class="control-label">Gambar :</label>
								<input type="file" name="image" accept="image/*">
	            </div>
	          </div>
						<div class="box-footer">
	            <div class="pull-right">
	              <input type="submit" class="btn btn-default" name="draft" value="Draft">
	              <input type="submit" class="btn btn-primary" name="post" value="Post">
	            </div>
	          </div>
					</form>
				</div>
			</div>
		</div>
	</div>


@endsection

<!-- Page Script -->
