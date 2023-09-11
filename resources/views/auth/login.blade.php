@extends('layouts.main')
@section('title', 'login')
@section('content')

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="block text-center">
                        <div class="logo text-center">
                            <a href="{{ route('main.index', app()->getLocale()) }}">{{ config('app.name') }}</a>
                        </div>
                        <h2 class="text-center">{{ __('Welcome back!') }}</h2>
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <form class="text-left clearfix" action="{{ route('login', app()->getLocale()) }}" method="Post">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="email" class="form-control @error('email') border-danger @enderror"
                                    name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password"
                                    class="form-control @error('password') border-danger @enderror"
                                    placeholder="{{ __('Password') }}">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3 d-flex align-items-center">
                                <div class="col form-check d-flex">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label ms-3" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="col">
                                    <a href="{{ route('password.request', app()->getLocale()) }}" class="text-success">{{ __('Forgot your password?') }}</a>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn-main text-center mb-3">{{ __('Login') }}</button>
                            </div>
                            <p>{{ __("Don't have an account yet?") }} <span><a href="{{ route('register', app()->getLocale()) }}">{{ __('Register') }}</a></span></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
