@extends('layouts.main')
@section('title', '404')
@section('content')
    <section class="page-404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="logo text-center mb-4">
                            <a href="{{ route('main.index') }}">Perfect-Blog</a>
                        </div>
                        <h1 class="text-center">404</h1>
                        <h2 class="text-center mb-3">{{ __('Page Not Found') }}</h2>
                        <a href="{{ route('main.index') }}" class="btn-main mb-3"><i class="tf-ion-android-arrow-back"></i> {{ __('Back') }}</a>
                        <p class="copyright-text">© 2024 CodeVSH All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
