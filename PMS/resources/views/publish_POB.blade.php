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
                <!-- <span class="select2 select2-container select2-container--default select2-container--focus select2-container--above" dir="ltr" style="width: 100%;">
                <span class="selection">
                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="false" aria-expanded="false" tabindex="-1">
                <ul class="select2-selection__rendered">
                <li class="select2-search select2-search--inline">
                <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select a State" style="width: 475px;">
                </li>
                </ul>
                </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
                </span> -->
              
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
