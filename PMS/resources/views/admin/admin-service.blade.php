@extends('layouts.masters.admin')

@section('htmlheader_title')
  Services
@endsection


@section('main-content')

  <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Status Permohonan</h3>

        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>No.</th>
                <th>NIM Mahasiswa</th>
                <th>Form</th>
                <th>Status</th>
                <th>Tanggal Upload</th>
              </tr>
              </thead>
              <tbody>
              @foreach($forms as $form)
                <tr>
                  <td></td>
                  <td>{{ $form->nim }}</td>
                  <td><a href="{{ url($form->file_path) }}">{{ $form->nama_form }}</a></td>
                  <td id="editButton">
                    <div class="btn-group">
                    <!-- status : Telah diupload -->
                    @if ($form->status == "Telah diupload")
                      <span class="label label-warning"> {{ $form->status }} 
                        <button class="label label-warning" data-target="#{{ $form->id }}" data-toggle="modal" style="border:none">
                          <i class="fa fa-edit"></i>
                        </button>
                      </span>
                    @endif
                    <!-- status : Sedang diproses -->
                    @if ($form->status == "Sedang diproses")
                      <span class="label label-info"> {{ $form->status }} 
                        <button class="label label-info" data-target="#{{ $form->id }}" data-toggle="modal" style="border:none">
                          <i class="fa fa-edit"></i>
                        </button>
                      </span>
                    @endif
                    <!-- status : Telah selesai diproses -->
                    @if ($form->status == "Telah selesai diproses")
                      <span class="label label-success"> {{ $form->status }} 
                        <button class="label label-success" data-toggle="modal" style="border:none">
                        </button>
                      </span>
                    @endif
                      
                    </div>
                  </td>
                  <td>
                    <span>{{ $form->created_at->format('d/m/Y') }}</span>
                  </td>
                </tr>

                <!-- modal -->
                <div class="modal fade" id="{{ $form->id }}" tabindex="-1"  aria-labelledby="myModalLabel">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <form action="{{ route('change-status') }}" method="post">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title" id="myModalLabel">Change Form Status</h4>
                         </div>
                         <div class="modal-body">
                           <!-- Hidden input -->
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <input type="hidden" name="idform" value="{{ $form->id }}">
                           <!-- End hidden input -->
                           <div class="form-group">
                             <label for="documentname">Status Saat ini :</label>
                             @if ($form->status == "Telah diupload")
                                <label class=" label label-warning" id="{{ $form->status }}">{{ $form->status }}
                                </label>
                             @endif
                             @if ($form->status == "Sedang diproses")
                                <label class=" label label-info" id="{{ $form->status }}">{{ $form->status }}
                                </label>
                             @endif
                             @if ($form->status == "Telah selesai diproses")
                                <label class=" label label-success" id="{{ $form->status }}">{{ $form->status }}
                                </label>
                             @endif
                           </div>
                           <div class="form-group">
                             <label for="documentname">Ubah status menjadi :</label>
                             <div class="radio">
                              @if ($form->status == "Telah diupload")
                                <label class="form-control" style="border:none">
                                  <input type="radio" name="newStatus" value="Sedang diproses"> Sedang diproses
                                </label>
                              @endif
                              @if ($form->status == "Telah diupload" or $form->status == "Sedang diproses")
                                <label class="form-control" style="border:none">
                                  <input type="radio" name="newStatus" value="Telah selesai diproses"> Telah selesai diproses
                                </label> 
                              @endif
                             </div>
                           </div>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                           <button type="submit" class="btn btn-primary">Save</button>
                         </div>
                       </form>
                     </div>
                   </div>
                 </div>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->

      </div>

@endsection
