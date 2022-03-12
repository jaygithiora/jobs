@extends('layouts.app')

@section('content')
<div class="container-fluid main">
    <div class="row d-flex align-items-center dark justify-content-center">
        <div class="col-md-8 text-white">
            <!--<div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>-->
            <h3>Welcome to Edupro</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum atque, error labore quaerat, molestiae eaque ullam deleniti consequatur beatae architecto iste adipisci voluptates vero veritatis neque ipsam obcaecati velit. Dolore.</p>
        </div>
    </div>
</div>
@endsection
