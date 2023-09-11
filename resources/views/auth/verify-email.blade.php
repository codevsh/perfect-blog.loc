@extends('layouts.main')
@section('title', 'verify-email')
@section('content')

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="block text-center">
                        <div class="logo text-center">
                            <a href="{{ route('main.index', app()->getLocale()) }}">{{ config('app.name') }}</a>
                        </div>
                        <h2 class="text-center">{{ __('Verify Email') }}</h2>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @else
                            <div class="alert alert-warning">
                                {{ __('Please verify your email. We just emailed you verification link.') }}
                            </div>
                        @endif
                        <form class="text-left clearfix" action="{{ route('verification.send', app()->getLocale()) }}" method="Post">
                            @csrf

                            <div class="text-center">
                                <button type="submit"
                                    class="btn-main text-center mb-3">{{ __('Resend verification link') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
