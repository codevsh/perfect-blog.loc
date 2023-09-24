@extends('layouts.main')
@section('title', 'My Profile EDit')
@section('content')
    {{-- <h1>{{ __('My Profile') }}</h1> --}}
    @include('layouts.inc.main-header')

    <div class="bg-light py-3 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="{{ route('main.index') }}">{{ __('Home') }}</a>
                    <span class="mx-2 mb-0">/</span>
                    <a href="{{ route('profile') }}">{{ __('My Profile') }}</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ __('Edit') }}</strong>
                </div>
            </div>
        </div>
    </div>
    <section class="main-content">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                          @livewire('profile.profileForm', ['user' => $user])
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.inc.main-footer')
@endsection
