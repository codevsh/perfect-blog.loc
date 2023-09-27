@extends('layouts.main')
@section('title', 'Search: ' . $search)
@section('content')

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <body>

        @include('layouts.inc.main-header')

        <div class="bg-light py-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="{{ route('main.index') }}">{{ __('Home') }}</a> <span
                            class="mx-2 mb-0">/</span> <strong class="text-black">{{ __('Search by:') }} {{ $search }}</strong></div>
                </div>
            </div>
        </div>
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @if ($articles->count() > 0)
                        <p class="text-danger">{{ __('Search result view:') }}<span class="fw-bold text-dark">{{ $articles->count() }}</span> {{ __('from') }}: <span class="fw-bold text-dark">{{ $articles->total() }}</span></p>
                            @foreach ($articles as $article)
                                <article class="blog-post mb-4">
                                    <div class="post-card">
                                        <img class="card-img-top" src="{{ Storage::url($article->prev_img) }}" alt="">
                                        <h2>{{ $article->title }}</h2>
                                        <ul class="meta-data">
                                            <li><i class="fas fa-calendar"></i> <a
                                                    href="#">{{ \Carbon\Carbon::parse($article->created_at)->toFormattedDateString() }}</a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="fas fa-th-list    "></i>
                                                    {{ $article->category->title }}</a></li>
                                            <li><i class="fas fa-tag"></i>
                                                @foreach ($article->tags as $tag)
                                                    <a href="#">{{ $tag->title }}</a>,
                                                @endforeach

                                            </li>
                                            @livewire('article-data-component', [$article])
                                        </ul>
                                        <div class="description">
                                            <p>
                                                {!! mb_strimwidth($article->description, 0, 300, ' (...)') !!}
                                            </p>
                                        </div>
                                        <a href="{{ route('main.show', $article->slug) }}"
                                            class="btn-main">{{ __('Continue reading') }}</a>
                                    </div>
                                </article>
                            @endforeach
                            <nav class="my-5">
                                {{ $articles->appends(request()->all())->links('pagination::bootstrap-5') }}
                            </nav>
                        @else
                        <h4 class="text-center">{{ __('Sorry, nothing found matching your request') }} <span class="fw-bold"> - "{{ request('search') }}"</span></h4>
                        @endif
                    </div>

                    @include('layouts.inc.main-sidebar')
                </div>
            </div>
        </section>

        @include('layouts.inc.main-footer')

    @endsection
