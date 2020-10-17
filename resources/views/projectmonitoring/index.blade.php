@extends('adminlte.layouts.app')

@section('title', 'Project Monitoring')

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
		        <h3 class="card-title">Project Monitoring</h3>
		    </div>
		    <div class="card-body">
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
                            <th>JO Id</th>
		    				<th>Desc</th>
                            <th>Status JO</th>
                            <th>Target Date</th>
                            <th>Grup Name</th>
                            <th>Customer</th>
		    				<th>Opsi</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($jo as $data)
		    			<tr>
                            <td>{{ $data->jo_id }}</td>
                            <td>{{ $data->desc }}</td>
                            <td>{{ $data->status_jo }}</td>
							<td>{{ $data->target_date }}</td>
							<td>{{ $data->location->grup_name }}</td>
							<td>{{$data->project->customer->nama_customer}}</td>
                        	<td>
								@php
									$index = "/asset?jo_id=".$data->id;	
								@endphp
								<a class="btn btn-primary btn-sm" href="{{ $index }}" data-toggle="tooltip" title="Detail Asset">
									<i class="fa fa-info-circle"></i>
								</a>
								<a class="btn btn-warning btn-sm" href="{{ $index }}" type="submit" style="margin-left: 10px; margin-bottom: 10px;" >Submit
								</a>
								
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