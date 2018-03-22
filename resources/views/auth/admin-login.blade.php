@extends('layouts.loginadminlayout')
@section('title', 'Kaos Muslim RG')
@section('description', 'Kaos Muslim')
@section('pagespecificstyles')
<style type="text/css">
@media (max-width:640px){
    .image_section img:first-child{
        display:none;
    }
}
</style>
@stop
@section('content')
<div class="top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 image_section">
                <div class="col-md-12 text-center pb-2">
                    <img src="{{ asset('images/login-icon.svg') }}" width="80">
                </div>
                <h3 class="text-center navbar-blue">Hey, good to see you again!</h3>
                <p class="text-center pb-4" style="color: #668ea7">Login to Admin</p>
                <div class="card card-default box">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control-lg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control-lg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <a href="{{ route('password.request') }}" class="navbar-blue">
                                        Lupa Password?
                                    </a>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block red-button">
                                    Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection