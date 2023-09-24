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
                    <strong class="text-black">{{ __('My Comments') }}</strong>
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
                                    @if ($comments->count() > 0)
                                    <div class="card-header">
                                        <h3>{{ __('My Comments') }}: ({{ $comments->count() }})</h3>
                                    </div>
                                    <div class="card-body">
                                        @if (session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                        <table class="table table-striped">
                                            <thead class="thead-default">
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ __('Article Title') }}</th>
                                                    <th>{{ __('Comment Content') }}</th>
                                                    <th colspan="2">{{ __('Actions') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($comments as $comment)
                                                    <tr>
                                                        <td scope="row">{{ $comment->article->id }}</td>
                                                        <td>{{ $comment->article->title }}</td>
                                                        <td>{{ $comment->content }}</td>
                                                        <td><a href="{{ route('main.show', $comment->article->slug) }}" class="btn btn-dark btn-sm">{{ __('View') }}</a></td>
                                                        <td><a href="{{ route('profile.comments.edit', $comment) }}" class="btn btn-success btn-sm">{{ __('Edit') }}</a></td>
                                                        <td>
                                                            <form action="{{ route('profile.comments.delete', $comment) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">{{ __('Delete') }}
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    @else
                                    <h3 class="card-title text-center">{{ __('Likes not Found') }}</h3>
                                    @endif
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
