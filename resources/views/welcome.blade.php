@extends('layouts.app')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron_wrapper d-flex vh-100 flex-column justify-content-center">
    <div class="container">
        <div class="jumbotron_elements">
            <div class="p-5 text-center bg-image rounded-3">
                <h1 class="text-white">
                    Your next favourite Dev
                </h1>
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="button_elements d-flex justify-content-center py-5">
                        <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="btn btn-light mx-3" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Jumbotron -->
@endsection