@extends('adminlte.layouts.app')

@section('title', 'Report Asset Customer')

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
		        <h3 class="card-title">Report Asset Customer</h3>
		    </div>
		    <div class="card-body">
            <form action="{{ route('reportasset.index') }}" method="get">
				<label for="nama_customer" class="col-md-2 col-form-label text-md-left">{{ __('Nama Customer') }}</label>
                    <div class="col-md-2" style="margin-bottom: 20px;">
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
                    <p>
                        <button type="submit" style="margin-left: 10px; margin-bottom: 20px;" class="btn btn-primary">Cari</button>
                    </p>
            </form>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
                            <th>Serial Number</th>
		    				<th>Produk</th>
                            <th>Produk Type</th>
                            <th>Location</th>
                            <th>Customer</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($asset as $data)
		    			<tr>
                            <td>{{ $data->serial_number }}</td>
                            <td>{{ $data->produk_id }}</td>
                            <td>{{ $data->produk_type }}</td>
                            @if(empty($selectedCustomer))
                            <td>{{ $data->jo->location->location_name }}</td>
                            <td>{{ $data->jo->location->customer->nama_customer }}</td>
                            @else
                            <td>{{ $data->location_name}}</td>
                            <td>{{ $data->nama_customer }}</td>
                            @endif
                        	<td>
								@php
									$index = "/asset?jo_id=".$data->id;	
								@endphp
							</td>
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

<script>
    $(function () {
      $("#example1").DataTable({
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush