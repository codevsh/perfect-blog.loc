@extends('layouts.main')
@section('title', 'Home')
@section('content')



    <body>

        <x-header-component />
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach ($articles as $article)
                            <article class="blog-post mb-4">
                                <div class="post-card shadow-sm rounded-top">
                                    <img class="card-img-top rounded-top" src="{{ Storage::url($article->prev_img) }}"
                                        alt="">
                                    <div class="post-card-body px-3 pb-3 d-flex flex-column">
                                        <h2>{{ $article->title }}</h2>
                                        <ul class="meta-data d-flex">
                                            <li><i class="fas fa-calendar"></i>
                                                {{ \Carbon\Carbon::parse($article->created_at)->toFormattedDateString() }}
                                            </li>
                                            <li><a href="{{ route('main.category', $article->category->slug) }}">
                                                    <i class="fas fa-th-list    "></i>
                                                    {{ $article->category->title }}</a></li>
                                            <li><i class="fas fa-tag"></i>
                                                @foreach ($article->tags as $tag)
                                                    <a href="{{ route('main.tag', $tag->slug) }}">{{ $tag->title }}</a>,
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

                    <x-main-sidebar-component />
                </div>
            </div>
        </section>
        <x-footer-component />

    @endsection
