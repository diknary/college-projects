@extends('layouts.masters.admin')

@section('htmlheader_title')
	Home
@endsection

@section('main-content')
	<div class="row">  
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title">Recent Activities</h3>
          </div>
        <div class="box-body">
            <table id="doctable3" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="width: 1px">No.</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Date</th>
              </tr>
              </thead>
              <tbody>
              @foreach($joins as $join)
                    <tr>
                      <td>{{ $count++ }}</td>
                      <td>{{ $join->document }}</a></td>
                      <td>{{ $join->status }}</td>
                      <td>{{ $join->updated_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        <!-- /.col -->
      </div>
  </div>
</div>
@endsection
