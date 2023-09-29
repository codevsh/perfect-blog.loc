@extends('layouts.main')
@section('title', "$article->title")
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
                            class="mx-2 mb-0">/</span> <strong class="text-black">{{ $article->title }}</strong></div>
                </div>
            </div>
        </div>
        <section class="main-content">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="post-card-single">
                            <div class="image-block">
                                <img src="{{ Storage::url($article->main_img) }}" alt="{{ $article->title }}">
                            </div>
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
                            <div class="post-content">
                                {!! $article->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    @livewire('liked-article', [$article])
                </div>
            </div>
        </section>
        <section class="related-posts my-3">
            <div class="container">
                <div class="row border-top">
                    <div class="col-md-12 py-3">
                        <h4>{{ __('Related articles') }}</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach ($rarticles as $item)
                        <div class="col-md-3 col-sm-6 col-sx-12">

                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ Storage::url($item->prev_img) }}" alt="Dist Photo 2">
                                <div class="card-img-overlay d-flex flex-column justify-content-center">
                                    <a href="{{ route('main.show', $item->slug) }}">
                                        <h4 class="card-title text-white mt-5 pt-2">{{ $item->title }}</h4>
                                    </a>
                                    <p class="card-text pb-2 pt-1 text-white">
                                        {{ Str::limit(strip_tags($item->description), 0, 40, ' (...)') }}
                                    </p>
                                    <a href="{{ route('main.show', $item->slug) }}" class="text-white">
                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @livewire('comment-component', ['article' => $article])

        @include('layouts.inc.main-footer')

    @endsection
