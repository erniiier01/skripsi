@extends('adminlte.layouts.app')

@section('title', 'Edit Project')

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
		    	<form action="{{ route('project.update', $project->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group row">
                        <label for="nama_customer" class="col-md-3 col-form-label text-md-right">{{ __('Customer Name') }}</label>

                        <div class="col-md-7">
                            <select class="form-control selec2bs4 @error('nama_customer') is-invalid @enderror"
                                style="width: 100%" name="customer" required>
                                <option disabled selected>Pilih</option>
                                @foreach ($customer as $data)
                                    <option @if($project->customer_id == $data->id) selected @endif value="{{ $data->id }}">
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
                    </div>
                    
                    <div class="form-group row">
                        <label for="project_code" class="col-md-3 col-form-label text-md-right">{{ __('Code Customer') }}</label>

                        <div class="col-md-7">
                            <input id="project_code" type="text" name="project_code" class="form-control @error('project_code') is-invalid @enderror" name="project_code" value="{{ $project->project_code }}" required autocomplete="project_code" autofocus>

                            @error('project_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="desc" class="col-md-3 col-form-label text-md-right">{{ __('Code Customer') }}</label>

                        <div class="col-md-7">
                            <input id="desc" type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ $project->desc }}" required autocomplete="desc" autofocus>

                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_mulai" class="col-md-3 col-form-label text-md-right">{{ __('Start Date') }}</label>

                        <div class="col-md-7">
                            <input id="tanggal_mulai" type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ $project->tanggal_mulai }}" required autocomplete="tanggal_mulai" autofocus>

                            @error('tanggal_mulai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_selesai" class="col-md-3 col-form-label text-md-right">{{ __('End Date') }}</label>

                        <div class="col-md-7">
                            <input id="tanggal_selesai" type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" value="{{ $project->tanggal_selesai }}" required autocomplete="tanggal_selesai" autofocus>

                            @error('tanggal_selesai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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