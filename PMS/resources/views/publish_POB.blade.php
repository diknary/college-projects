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


					<div class="panel-body">
						<form role="form">
							<div class="box-body">
								<div class="form-group">
								  <label for="POBname">POB Name</label>
								  <input type="text" class="form-control" id="POBname" placeholder="Enter POB name">
								</div>
								
								<div class="form-group">
								<label for="tagged">Share with</label>
								<select class="form-control select2 select2-hidden-accessible" multiple data-placeholder="Share to" style="width: 100%;" tabindex="-1" aria-hidden="true">
								  	@foreach($view as $row)
								  	  <option>{{$row->name}}</option>
								  	@endforeach
								</select>
								<span class="select2 select2-container select2-container--default select2-container--focus select2-container--below" dir="ltr" style="width: 100%;">
								  	<span class="selection">
								  	  <span class="select2-selction select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
								  	  	<ul class="select2-selection__rendered">
								  	  	 <li class="select2-search select2-search--inline">
								  	  	 	<input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Share to" style="width: 473px;">
								  	  	 	</li>
								  	  	 </ul>
								  	  </span>
								     </span>
								  	<span class="dropdown-wrapper" aria-hidden="true"></span>
								 </span>
								</div>
								
								<div class="form-group">
								  <label for="fileupload">File upload</label>
								  <input type="file" id="fileupload">
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
@endsection

<!-- Page Script -->
