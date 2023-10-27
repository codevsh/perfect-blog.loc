@extends('layouts.main')
@section('title', trans('About'))
@section('content')
    <x-header-component />
    <section class="about mb-5">
        <div class="bg-light py-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="{{ route('main.index') }}">{{ __('Home') }}</a> <span
                            class="mx-2 mb-0">/</span> <strong class="text-black">{{ __('Contact') }}</strong></div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <livewire:main.contact-form />
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('front/images/contact/contact.png') }}" alt="{{ __('Contact us') }}">
                        <ul class="list-group list-group-flush my-3">
                            <li class="list-group-item bg-white text-muted">
                                <span class="me-3">
                                    <i class="fa fa-home text-secondary" aria-hidden="true"></i>
                                </span>1080 Michael Street, Houston, TX
                            </li>
                            <li class="list-group-item bg-white text-muted">
                                <span class="me-3">
                                    <i class="fa fa-phone text-secondary" aria-hidden="true"></i>
                                </span>123-456-789-987
                            </li>
                            <li class="list-group-item bg-white text-muted">
                                <span class="me-3">
                                    <i class="fa fa-globe text-secondary" aria-hidden="true"></i>
                                </span>777-888-789-987
                            </li>
                            <li class="list-group-item bg-white text-muted">
                                <span class="me-3">
                                    <i class="fa fa-envelope text-secondary" aria-hidden="true"></i>
                                </span>random@example.com
                            </li>
                        </ul>
                        <ul class="list d-flex justify-content-between align-items-center w-50 ps-0">
                            <li class="list-group-item"><i class="fab fa-linkedin-in fa-3x  text-secondary "></i></li>
                            <li class="list-group-item"><i class="fab fa-telegram-plane fa-3x  text-secondary "></i></li>
                            <li class="list-group-item"><i class="fab fa-instagram fa-3x  text-secondary "></i></li>
                            <li class="list-group-item"><i class="fab fa-twitter fa-3x text-secondary "></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer-component/>
@endsection
