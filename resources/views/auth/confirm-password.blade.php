@extends('layouts.main')
@section('title', 'password-confim')
@section('content')

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="block text-center">
                        <div class="logo text-center">
                            <a href="{{ route('main.index', app()->getLocale()) }}">{{ config('app.name') }}</a>
                        </div>
                        <h2 class="text-center">{{ __('Confirm Password!') }}</h2>
                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <form class="text-left clearfix" action="{{ route('password.confirm', app()->getLocale()) }}" method="Post">
                            @csrf


                            <div class="form-group mb-3">
                                <input type="password" name="password"
                                    class="form-control @error('password') border-danger @enderror"
                                    placeholder="{{ __('Password') }}">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn-main text-center mb-3">{{ __('Confirm Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
