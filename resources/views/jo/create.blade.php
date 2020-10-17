@extends('adminlte.layouts.app')

@section('title', 'Create Job Order')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-8">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Create Job Order</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('jo.store') }}" method="POST">
		    		@csrf
                <input type="hidden" name="project_id" value="{{ $project->id }}">
                    <div class="form-group row">
                        <label for="jo_id" class="col-md-3 col-form-label text-md-right">{{ __('JO Id') }}</label>
                        <div class="col-md-7">
                            <input id="jo_id" type="text" name="jo_id" class="form-control @error('jo_id') is-invalid @enderror" name="jo_id" value="{{ old('jo_id') }}" required autocomplete="jo_id" autofocus>

                            @error('jo_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="desc" class="col-md-3 col-form-label text-md-right">{{ __('Desc') }}</label>
                        <div class="col-md-7">
                            <input id="desc" type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc" autofocus>

                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status_jo" class="col-md-3 col-form-label text-md-right">{{ __('Status JO') }}</label>
                        <div class="col-md-7">
                            <select class="form-control selec2bs4" name="status_jo" id="status_jo">
                                <option value="Pilih">Pilih</option>
                                <option value="Registrasi">Registrasi</option>
                                <option value="Open-Need Assigment">Open-Need Assigment</option>
                                <option value="Open Schedule">Open Schedule</option>
                                <option value="WO Confirm">WO Confirm</option>
                                <option value="Doc Verifikasi">Doc Verifikasi</option>
                                <option value="Close Complete">Close Complete</option>`
                              </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="grup_name" class="col-md-3 col-form-label text-md-right">{{ __('Grup Name') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('grup_name') is-invalid @enderror"
                                style="width: 100%" name="grup_name" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($location as $data)
                                    <option value="{{ $data->id }}">
                                        {{$data->grup_name . " - " . $data->grup_name}}
                                    </option>         
                                @endforeach
                            </select>

                            @error('grup_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="location_name" class="col-md-3 col-form-label text-md-right">{{ __('Location Name') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('location_name') is-invalid @enderror"
                                style="width: 100%" name="location_id" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($location as $data)
                                    <option value="{{ $data->id }}">
                                        {{$data->location_name . " - " . $data->location_name}}
                                    </option>         
                                @endforeach
                            </select>

                            @error('location_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="target_date" class="col-md-3 col-form-label text-md-right">{{ __('Target Date') }}</label>

                        <div class="col-md-7">
                            <input id="target_date" type="date" name="target_date" class="form-control @error('target_date') is-invalid @enderror" name="target_date" value="{{ old('target_date') }}" required autocomplete="target_date" autofocus>

                            @error('target_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.select2bs4').select2({
            theme: 'bootstrap4',
            
        });

        bsCustomFileInput.init();
    });
</script>
@endpush

