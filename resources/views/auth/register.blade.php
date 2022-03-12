@extends('layouts.auth')

@section('content')
    <div class="register-logo">
        <a href="{{url('/')}}"><img src='{{asset('images/favicon.png')}}'>&nbsp;{{ config('app.name', 'Laravel') }}</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action='{{ route('register') }}' method="post">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" name='firstname' placeholder="First Name" value="{{old('firstname')}}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-group mt-3">
                <input type="text" class="form-control @error('lastname') is-invalid @enderror" name='lastname' placeholder="Last Name"  value="{{old('lastname')}}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-group mt-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name='email' placeholder="Email Address"  value="{{old('email')}}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-group mt-3">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name='phone' placeholder="Phone Number eg 07..."  value="{{old('phone')}}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>
            </div>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group mt-3">
                <input type="password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group mt-3">
            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
            placeholder="Retype Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
                </label>
                </div>
                @error('terms')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
        <!--
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
            </a>
        </div>-->
        <hr>
        <a href="{{url('login')}}" class="text-center"><i class='fas fa-long-arrow-alt-right'></i> I already have a membership</a>
    </div>
@endsection
