@extends('adminlte.layouts.app')

@section('title', 'List Job Order')

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
		        <h3 class="card-title">List Job Order</h3>
		    </div>
		    <div class="card-body">
				
				@if(!empty($project))
				<div style="margin-bottom: 15px;">
				<h5><strong>Customer Name :</strong> {{$project->customer->nama_customer}}</h5>
				<h5><strong>Project Code :</strong> {{$project->project_code}}</h5>
				<h5><strong>Desc :  </strong>{{$project->desc}} </h5>
				<h5><strong>Date : </strong> {{$project->tanggal_mulai}} <span>S/D {{$project->tanggal_selesai}}</span></h5>
				</div>
				@endif
				@php
				if(!empty($project)){
					$create = "/jo/create?project_id=".$project->id;	
				}else{
					$create = "/jo/create";
				}
				@endphp
				<p>
					<a href="{{ $create }}" class="btn btn-primary">Create Job Order</a>
				</p>
		    	{{-- @include('partial.alert') --}}
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				{{-- <th>Tanggal</th> --}}
                            {{-- <th>ID Order</th> --}}
                            <th>JO Id</th>
		    				<th>Desc</th>
		    				<th>Status JO</th>
                            <th>Grup Name</th>
                            <th>Location Name</th>
                            <th>Target Date</th>
		    				<th>Opsi</th>
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
                            <td>{{ $data->location->grup_name }}</td>
                            <td>{{ $data->location->location_name }}</td>
		    				<td>{{ $data->target_date }}</td>
                        	<td>
								@php
									$index = "/asset?jo_id=".$data->id;	
								@endphp
								<a class="btn btn-primary btn-sm" href="{{ $index }}" data-toggle="tooltip" title="Add Asset">
									<i class="fas fa-file-medical"></i>
								</a>
								<a class="btn btn-warning btn-sm" href="{{ route('jo.edit', $data->id) }}" data-toggle="tooltip" title="Edit">
									<i class="fas fa-pencil-alt"></i>
								</a>
								<a class="btn btn-danger btn-sm" href="#"
									onclick="event.preventDefault();document.getElementById('delete-form').submit();">
									<i class="fas fa-trash"></i>
								</a>

								<form id="delete-form" action="{{ route('jo.destroy', $data->id) }}" method="POST" style="display: none;">
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