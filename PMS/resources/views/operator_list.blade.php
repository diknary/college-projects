@extends('layouts.admin')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="box box-primary">
						<div class="box-header with-border">
						<h3 class="box-title">Publish POB</h3>
						</div>



						<form action="{{url('/send_POB')}}" method="get">
							{!! csrf_field() !!}
							<div class="box-body">
								<div class="form-group">
								  <label for="POBname">POB Name</label>
								  <input type="text" class="form-control" name="POBname" id="POB" placeholder="Enter POB name">
								</div>


				                <div class="form-group">
					                <label>Share to</label>
					                <select name="selected_user[]" class="form-control select2" multiple="multiple" data-placeholder="Select recipients" style="width: 100%;">
					              		@foreach ($view as $row)
					              		<option value='{{$row->id}}'>{{$row->name}}</option>
					                	@endforeach
					                </select>
					            </div>


								<div class="form-group">
								  <label for="fileupload">File upload</label>
								  <input type="file" id="fileupload">
								</div>
							<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
							<button type="submit" class="btn btn-primary" id="button">Submit</button>
						</form>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection

<!-- Page Script -->
