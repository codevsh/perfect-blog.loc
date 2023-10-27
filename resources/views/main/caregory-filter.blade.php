@extends('layouts.main')
@section('title', 'Home')
@section('content')


    <body>

        <x-header-component/>

        <div class="bg-light py-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="{{ route('main.index') }}">{{ __('Home') }}</a> <span
                            class="mx-2 mb-0">/</span> <strong class="text-black">{{ __('Category') }}:
                            {{ $category->title }}</strong></div>
                </div>
            </div>
        </div>
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @if ($articles->count() > 0)

                            @foreach ($articles as $article)
                                <article class="blog-post mb-4">
                                    <div class="post-card">
                                        <img class="card-img-top" src="{{ Storage::url($article->prev_img) }}"
                                            alt="">
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
                                    {{ $articles->links('pagination::bootstrap-5') }}
                                </nav>
                                @else
                                <h3 class="text-center">{{ __('Sorry, but there are no articles in this category yet') }}</h3>
                                @endif
                            </div>

                    <x-main-sidebar-component/>
                </div>
            </div>
        </section>

        <x-footer-component/>

    @endsection
