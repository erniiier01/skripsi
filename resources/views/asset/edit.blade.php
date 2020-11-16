@extends('adminlte.layouts.app')

@section('title', 'Edit Asset')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Project</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('asset.update', $asset->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group row">
                        <label for="serial_number" class="col-md-3 col-form-label text-md-right">{{ __('Serial Number') }}</label>

                        <div class="col-md-7">
                            <input id="serial_number" type="text" name="serial_number" class="form-control @error('serial_number') is-invalid @enderror" name="serial_number" value="{{ $asset->serial_number }}" required autocomplete="serial_number" autofocus>

                            @error('serial_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="produk_id" class="col-md-3 col-form-label text-md-right">{{ __('Product') }}</label>

                        <div class="col-md-7">
                            <input id="produk_id" type="text" name="produk_id" class="form-control @error('produk_id') is-invalid @enderror" name="produk_id" value="{{ $asset->produk_id }}" required autocomplete="produk_id" autofocus>

                            @error('produk_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="produk_type" class="col-md-3 col-form-label text-md-right">{{ __('Product Type') }}</label>

                        <div class="col-md-7">
                            <input id="produk_type" type="text" name="produk_type" class="form-control @error('produk_type') is-invalid @enderror" name="produk_type" value="{{ $asset->produk_type }}" required autocomplete="produk_type" autofocus>

                            @error('produk_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="image" class="col-md-3 col-form-label text-md-right">{{ __('Upload Serial Number') }}</label>
                       
                        <div class="col-md-7">
                            <input type="file" name="image" />
                            <img src="{{ URL::to('/') }}/images/{{ $asset->image }}" class="img-thumbnail" width="200" />
                            <input type="hidden" name="hidden_image" value="{{ $asset->image }}" required autocomplete="image" autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Ubah') }}
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