@extends('layouts.masters.admin')

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
						<h3 class="box-title">Tambah Operator</h3>
						</div>



					<form action="{{url('/operator-add')}}" method="POST">
							{!! csrf_field() !!}
							<div class="box-body">

                <div class="form-group">
	                <label>Pilih User :</label>
	                <select name="selected_user" class="form-control" data-placeholder="Pilih Staff">
	              		@foreach ($get as $row)
	              			<option value='{{$row->id}}'>{{$row->name}}</option>
	                	@endforeach
	                </select>
	            	</div>

								<div class="form-group">
									<!-- select -->
	                <div class="form-group">
	                  <label>Jadikan Sebagai :</label>
	                  <select class="form-control">
	                    <option>Pengendali Dokumen Departemen</option>
	                    <option>Admin Departemen</option>
	                    <option>Pengendali Dokumen Fakultas</option>
	                    <option>option 4</option>
	                    <option>option 5</option>
	                  </select>
	                </div>
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
