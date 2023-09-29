@extends('layouts.main')
@section('title', 'My Comments')
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
                    <a href="{{ route('profile.comments') }}">{{ __('My Comments') }}</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ __('My Comment') }}</strong>
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
                            <div class="col-12">
                                <div class="card">
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('success') }}</div>
                                    @endif
                                    <div class="card-header">
                                        <h3>{{ __('My Comment') }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('profile.comments.update', $comment) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group mb-3">
                                                <label for="content">{{ __('comment content') }}</label>
                                                <textarea class="form-control @error('content') 'border-danger' @enderror"
                                                          id="content"
                                                          rows="3"
                                                          name="content">{{ $comment->content }}</textarea>
                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-main">{{ __('Update') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('layouts.inc.main-footer')
@endsection
