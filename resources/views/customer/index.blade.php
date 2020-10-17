@extends('adminlte.layouts.app')

@section('title', 'List Customer')

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
		        <h3 class="card-title">List Customer</h3>
		    </div>
		    <div class="card-body">
		    	{{-- @include('partial.alert') --}}
		    	<p>
		    		<a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>Date</th>
                            {{-- <th>ID Customer</th> --}}
                            <th>Code Customer</th>
		    				<th>Customer Name</th>
		    				<th>Action</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($customer as $data)
		    			<tr>
		    				<td>{{ $data->created_at->toDateString() }}</td>
		    				{{-- <td>{{ $data->id }}</td> --}}
		    				<td>{{ $data->code_customer }}</td>
		    				<td>{{ $data->nama_customer }}</td>
		    				<td>
								<a class="btn btn-warning btn-sm" href="{{ route('customer.edit', $data->id) }}" data-toggle="tooltip" title="Edit">
									<i class="fas fa-pencil-alt"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="#"
									onclick="event.preventDefault();document.getElementById('delete-form').submit();">
									<i class="fas fa-trash"></i>
								</a>

								<form id="delete-form" action="{{ route('customer.destroy', $data->id) }}" method="POST" style="display: none;">
									@csrf
									@method('DELETE')
								</form>
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