@extends('layouts.auth')

@section('content')
    <div class="register-logo">
        <a href="{{url('/')}}"><img src='{{asset('images/favicon.png')}}'>&nbsp;{{ config('app.name', 'Laravel') }}</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
        <p class="login-box-msg">Signin to start your session</p>

        <form action='{{ route('login') }}' method="post">
            @csrf

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
                <input type="password"class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="New Password">
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
            <div class="row mt-3">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember" value="{{old('remember')}}">
                <label for="remember">
                    Remember me
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
                <button type="submit" class="btn btn-primary btn-block">Login</button>
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
