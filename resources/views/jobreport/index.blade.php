@extends('adminlte.layouts.app')

@section('title', 'Job Report')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Job Report</h3>
		    </div>
		    <div class="card-body">
            <form action="{{ route('jobreport.index') }}">
                        {{-- Nama Customer --}}
                        <label for="nama_customer" class="col-md-2 col-form-label text-md-left">{{ __('Customer Name') }}</label>
                        <div class="col-md-2" style="margin-bottom: 12px;">
                            <select class="form-control selec2bs4 @error('nama_customer') is-invalid @enderror"
                                style="width: 100%" name="customer_id" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($customer as $data)
                                    <option @if($selectedCustomer == $data->id) selected @endif value="{{ $data->id }}">
                                        {{$data->nama_customer}}
                                    </option>         
                                @endforeach
                            </select>

                            @error('nama_customer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Project Code --}}
                        <label for="project_code" class="col-md-2 col-form-label text-md-left">{{ __('Project Code') }}</label>
                        <div class="col-md-2" style="margin-bottom: 12px;">
                            <select class="form-control selec2bs4 @error('project_code') is-invalid @enderror"
                                style="width: 100%" name="project_id" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($project as $data)
                                    <option @if($selectedProject == $data->id) selected @endif value="{{ $data->id }}">
                                        {{$data->project_code}}
                                    </option>         
                                @endforeach
                            </select>

                            @error('project_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- Tanggal --}}
                        <div class="form-group">
                            <label for="tanggal_mulai" class="col-md-3 col-form-label text-md-left">{{ __('From') }}</label>
    
                            <div class="col-md-2" style="margin-bottom: 12px;">
                                <input id="tanggal_mulai" type="date" name="tanggal_mulai" class="form-control selec2bs4 @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ $tanggalMulai }}" required autocomplete="tanggal_mulai" autofocus>
    
                                @error('tanggal_mulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="tanggal_selesai" class="col-md-3 col-form-label text-md-left">{{ __('To') }}</label>
    
                            <div class="col-md-2" style="margin-bottom: 12px;">
                                <input id="tanggal_selesai" type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" value="{{ $tanggalSelesai }}" required autocomplete="tanggal_selesai" autofocus>
    
                                @error('tanggal_selesai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>
                        {{-- Cari --}}
                        <p>
                            <button type="submit" style="margin-left: 10px; margin-bottom: 20px;" class="btn btn-primary">Show</button>
                            <button type="submit" style="margin-left: 10px; margin-bottom: 20px;" class="btn btn-danger">Export xlsx</button>
                        </p>
                        
                    </form>
    
				
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				{{-- <th>Tanggal</th> --}}
                            {{-- <th>ID Order</th> --}}
                            <th>JO Id</th>
		    				<th>Desc</th>
                            <th>Status JO</th>
                            <th>Target Date</th>
                            <th>Grup Name</th>
                            <th>Customer</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($jo as $data)
		    			<tr>
		    				{{-- <td>{{ $data->created_at->toDateString() }}</td> --}}
                            {{-- <td>{{ $data->id }}</td> --}}
                            <td>{{ $data->jo_id }}</td>
                            <td>{{ $data->desc }}</td>
                            <td>{{ $data->status_jo }}</td>
							<td>{{ $data->target_date }}</td>
							<td>{{ $data->location->grup_name }}</td>
							<td>{{$data->project->customer->nama_customer}}</td>
		    			</tr>
		    			@endforeach
                    </tbody>
		    	</table>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush