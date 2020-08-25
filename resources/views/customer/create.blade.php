@extends('adminlte.layouts.app')

@section('title', 'Create Customer')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Create Customer</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('customer.store') }}" method="POST">
		    		@csrf
                    <div class="form-group row">
                        <label for="code_customer" class="col-md-3 col-form-label text-md-right">{{ __('Code Customer') }}</label>

                        <div class="col-md-7">
                            <input id="code_customer" name="code_customer" type="text" class="form-control @error('code_customer') is-invalid @enderror" name="code_customer" value="{{ old('code_customer') }}" required autocomplete="code_customer" autofocus>

                            @error('code_customer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_customer" class="col-md-3 col-form-label text-md-right">{{ __('Nama Customer') }}</label>

                        <div class="col-md-7">
                            <input id="nama_customer" type="text" name="nama_customer" class="form-control @error('nama_customer') is-invalid @enderror" name="nama_customer" value="{{ old('nama_customer') }}" required autocomplete="nama_customer" autofocus>

                            @error('nama_customer')
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
@endpush