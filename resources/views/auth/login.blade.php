@extends('auth.master')

{{-- Title --}}
@section('title', "Laravel - Login")

@section('auth-content')
<p class="login-box-msg">Sign in to start your session</p>
@if ($errors->any())
<div class="alert alert-danger">
    <i class="icon fas fa-ban"></i> Invalid Email or Password
</div>
@endif
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="input-group mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required
            autocomplete="email" autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" required autocomplete="current-password"
            placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>

@if (Route::has('password.request'))
<p class="mb-1 mt-3">
    <a href="{{ route('password.request') }}">I forgot my password</a>
</p>
@endif

@if (Route::has('register'))
<p class="mb-0">
    <a href="{{ route('register') }}" class="text-center">Register a new account</a>
</p>
@endif
@endsection