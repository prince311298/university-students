@extends('layouts.app')

@section('content')
    
    <div class="wrapper">
        <div class="inner">
            <img src="{{ url('asset/images/image-1.png') }}" alt="" class="image-1">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h3>New Account?</h3>
                <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                        placeholder="Username">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-holder d-none">
                    <span class="lnr lnr-phone-handset"></span>
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-envelope"></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm Password">
                    

                </div>
                <button class="button1">
                    <span>Register</span>
                </button>
            </form>
            <img src="{{ url('asset/images/image-2.png') }}" alt="" class="image-2">
        </div>

    </div>
@endsection
