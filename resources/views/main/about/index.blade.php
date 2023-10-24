@extends('layouts.main')
@section('title', trans('About'))
@section('content')
    <x-header-component />
    <section class="about mb-5">
        <div class="bg-light py-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="{{ route('main.index') }}">{{ __('Home') }}</a> <span
                            class="mx-2 mb-0">/</span> <strong class="text-black">{{ __('About') }}</strong></div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    @foreach ($abouts as $about)
                        <div class="col-md-6 my-auto">
                            <img class="img-fluid" src="{{ Storage::url($about->image) }}" alt="{{ __('about') }}">
                        </div>
                        <div class="col-md-6 my-auto">
                            <h2 class="title">{{ __('About') }}</h2>
                            <div class="text-secondary">
                                {!! $about->content !!}
                            </div>
                            <a href="#" class="btn-main my-3">{{ __('Portfolio') }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
   <x-footer-component/>
@endsection
