@extends('adminlte.layouts.app')

@section('title', 'List Asset JO')

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
		        <h3 class="card-title">List Asset JO</h3>
		    </div>
		    <div class="card-body">
		    	{{-- @include('partial.alert') --}}
		    	<p>
                    @php
                        $create = "/asset/create?jo_id=" . $jo->id;   
                    @endphp
					<a href="{{ $create }}" style="margin-left: 10px; margin-bottom: 20px;"class="btn btn-primary">Add Asset</a>
		    	</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
							<th>Image</th>
                            <th>Serial Number</th>
		    				<th>Product</th>
		    				<th>Product Type</th>
                            <th>Owner</th>
		    				<th>Opsi</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($asset as $data)
		    			<tr>

							<td><img src="{{ URL::to('/') }}/foto/{{ $data->foto }}" class="img-thumbnail" width="200px;" /></td>
		    				<td>{{ $data->serial_number }}</td>
                            <td>{{ $data->produk_id }}</td>
                            <td>{{ $data->produk_type }}</td>
                            <td>{{ $data->nama_customer }}</td>
		    				<td>
								<a class="btn btn-warning btn-sm" href="{{ route('asset.edit', $data->id) }}" data-toggle="tooltip" title="Edit">
									<i class="fas fa-pencil-alt"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="#"
									onclick="event.preventDefault();document.getElementById('delete-form').submit();">
									<i class="fas fa-trash"></i>
								</a>

								<form id="delete-form" action="{{ route('asset.destroy', $data->id) }}" method="POST" style="display: none;">
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
        'excel', 'print'
        ],
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush