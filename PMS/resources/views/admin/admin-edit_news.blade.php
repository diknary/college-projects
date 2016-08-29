@extends('layouts.masters.admin')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
@foreach ($editnews as $edit)
	<div class="container spark-screen">
		<div class="col-md-10 col-md-offset-0">
			<div class="panel panel-default">
				<div class="box box-primary">
					<form class="" action="{{ route('save-news') }}" method="post" enctype="multipart/form-data">
						<div class="box-header with-border">
							<h3 class="box-title">Post Berita</h3>
						</div>
						<div class="box-body">
							<!-- Hidden input -->
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="username" id="username" value="{{ Session::get('staffName') }}">
							<input type="hidden" name="id" value="{{ $edit->id }}">
							<input type="hidden" name="oldnameimage" value="{{ $edit->news_title }}">
							<!-- / hidden input -->
				            <div class="form-group">
								<label for="posttitle">Judul :</label>
				             	<input class="form-control" name="title" value="{{ $edit->news_title }}">
				            </div>
				            <div class="form-group">
								<label for="postbody">Isi :</label>
								<p>
									<textarea id="compose-textarea" class="form-control" style="height: 300px" name="body">{{ $edit->news_body }}</textarea>
								</p>
	            			</div>
				            <div class="form-group">
								<label for="" class="control-label">Ganti Gambar :</label>
								<input type="file" name="image" accept="image/*">
				            </div>
				            {{-- <div class="form-group">
								<label for="" class="control-label">Hapus Gambar Sebelumnya?</label>
								<div class="form-control" style="border:none">
									<input type="checkbox" name="deleteimage" value="1">
									<span>Ya</span>
								</div>
				            </div> --}}
	          			</div>
						<div class="box-footer">
				            <div class="pull-right">
					            <input type="submit" class="btn btn-primary" name="post" value="Save">
				            </div>
	          			</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endforeach
@endsection

<!-- Page Script -->
