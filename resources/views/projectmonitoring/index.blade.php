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
						<div class="modal" tabindex="-1" id="exampleModal-{{ $data->id }}" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form action="{{ route('projectmonitoring.update', $data->id) }}" method="post">
										{{ method_field('PUT') }}
										@csrf
									<div class="modal-header">
										<h5 class="modal-title">Change Status</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group col-md-4">
											<label for="status">Status</label>
											<select id="status" name="status_jo" class="form-control">
												<option @if($data->status_jo == "Registrasi") selected @endif value="Registrasi">Registrasi</option>
												<option @if($data->status_jo == "Close Complete") selected @endif value="Close Complete">Close Complete</option>
											</select>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary">Submit</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
									</form>
								</div>
							</div>
						</div>
		    			<tr>
                            <td>{{ $data->jo_id }}</td>
                            <td>{{ $data->desc }}</td>
                            <td><a href="#" data-toggle="modal" data-target="#exampleModal-{{ $data->id }}">{{ $data->status_jo }}</a></td>
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