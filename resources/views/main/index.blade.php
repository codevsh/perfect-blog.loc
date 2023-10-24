@extends('layouts.main')
@section('title', 'Home')
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

        {{-- @include('layouts.inc.main-header') --}}
        <x-header-component/>
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach ($articles as $article)
                            <article class="blog-post mb-4">
                                <div class="post-card shadow-sm rounded-top">
                                    <img class="card-img-top rounded-top" src="{{ Storage::url($article->prev_img) }}" alt="">
                                    <div class="post-card-body px-3 pb-2 d-flex flex-column">
                                        <h2>{{ $article->title }}</h2>
                                        <ul class="meta-data d-flex">
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
                                                {!! mb_strimwidth($article->description, 0, 140, ' (...)') !!}
                                            </p>
                                        </div>
                                        <a href="{{ route('main.show', $article->slug) }}"
                                            class="btn-main ms-auto">{{ __('Continue') }}</a>
                                    </div>
                                </div>
                                </ul>
                            </article>
                        @endforeach
                        <nav class="my-5">
                            {{ $articles->links('pagination::bootstrap-5') }}
                        </nav>
                    </div>

                    @include('layouts.inc.main-sidebar')
                </div>
            </div>
        </section>

        @include('layouts.inc.main-footer')

    @endsection
