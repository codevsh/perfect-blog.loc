@extends('layouts.main')
@section('title', 'My Profile')
@section('content')
    {{-- <h1>{{ __('My Profile') }}</h1> --}}
    <x-header-component/>

    <div class="bg-light py-3 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="{{ route('main.index') }}">{{ __('Home') }}</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ __('My Profile') }}</strong>
                </div>
            </div>
        </div>
    </div>
    <section class="main-content">
        <div class="container">
            <div class="row my-3">
                @include('layouts.inc.profile-sidebar')
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-secondary">
                                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                    <div class="info-box-content">
                                        <p class="info-box-text text-light">{{ __('Likes') }}
                                            <span class="info-box-number text-danger fw-bold bg-light px-2 py-1 rounded">
                                                {{ auth()->user()->likedArticle->count() }}
                                            </span>
                                        </p>
                                        <span class="progress-description">
                                            <a href="{{ route('profile.likes') }}" class="btn btn-dark btn-sm mt-3">{{ __('More details') }}</a>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-dark">
                                    <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                                    <div class="info-box-content">
                                        <p class="info-box-text text-light">{{ __('Comments') }}
                                            <span class="info-box-number text-danger fw-bold bg-light px-2 py-1 rounded">
                                                {{ auth()->user()->comments->count() }}
                                            </span>
                                        </p>
                                        <span class="progress-description">
                                            <a href="{{ route('profile.comments') }}" class="btn btn-light btn-sm mt-3">{{ __('More details') }}</a>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <x-footer-component/>
@endsection
