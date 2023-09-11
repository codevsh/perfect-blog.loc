@extends('layouts.main')
@section('title', 'Forgot-Password')
@section('content')

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="block text-center">
                        <div class="logo text-center">
                            <a href="{{ route('main.index', app()->getLocale()) }}">{{ config('app.name') }}</a>
                        </div>
                        <h2 class="text-center">{{ __('Forgot your password?') }}</h2>
                        @if (session('status'))
                        <div class="alert alert-success">
                          {{ session('status') }}
                        </div>
                        @endif
                        <form class="text-left clearfix" action="{{ route('password.request', app()->getLocale()) }}" method="Post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" class="form-control @error('email') border-danger @enderror"
                                    name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-main text-center mb-3">{{ __('Send reset link') }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
