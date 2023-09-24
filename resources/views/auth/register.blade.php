@extends('layouts.main')
@section('title', 'Register')
@section('content')

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="block text-center">
                        <div class="logo text-center">
                            <a href="{{ route('main.index', app()->getLocale()) }}">{{ config('app.name') }}</a>
                        </div>
                        <h2 class="text-center">{{ __('Welcome') }}</h2>
                        <form class="text-left clearfix" action="{{ route('register', app()->getLocale()) }}" method="Post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') border-danger @enderror"
                                    placeholder="{{ __('Name') }}" autofocus value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
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
                                    placeholder="{{ __('Password') }}" >
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="password"
                                    name="password_confirmation"
                                    class="form-control" placeholder="{{ __('Confirm Password') }}">

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-main text-center mb-3">{{ __('Register') }}</button>
                            </div>
                        </form>
                        <p class="mt-20">{{ __('Already registered?') }} <a href="{{ route('login') }}"> {{ __('Login') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
