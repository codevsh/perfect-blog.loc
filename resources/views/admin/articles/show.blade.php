@extends('layouts.admin')
@section('title', "$article->title")
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Articles') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.article.index') }}">{{ __('Articles') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Article') . " $article->title" }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-8">

                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('admin.article.edit', $article->slug) }}"
                                class="btn btn-success btn-sm">{{ __('Edit') }}</a>
                            <form class="ml-auto" action="{{ route('admin.article.delete', $article->slug) }}"
                                method="article">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <section class="main-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="article-card-single">
                                                <div class="image-block">
                                                    <img class="img-fluid" src="{{ Storage::url($article->main_img) }}"
                                                        alt="{{ $article->title }}">
                                                </div>
                                                <h2>{{ $article->title }}</h2>
                                                <ul class="meta-data d-flex list-unstyled">
                                                    <li class="ml-3" style="font-size: 14px;"><i
                                                            class="fas fa-calendar text-secondary"></i> <a
                                                            class="text-muted"
                                                            href="#">{{ \Carbon\Carbon::parse($article->created_at)->toFormattedDateString() }}</a>
                                                    </li>
                                                    <li class="ml-3" style="font-size: 14px;">
                                                        <i class="fas fa-th-list text-secondary"></i>
                                                        <a class="text-muted"
                                                            href="#">{{ $article->category->title }}</a>
                                                    </li>
                                                    <li class="ml-3" style="font-size: 14px;">
                                                        <i class="fas fa-tag text-secondary"></i>
                                                        @foreach ($article->tags as $tag)
                                                            <a class="text-muted" href="#">{{ $tag->title }}</a>,
                                                        @endforeach
                                                    </li>
                                                    @if ($article->comments)
                                                        <li class="ml-3" style="font-size: 14px;">
                                                            <i class="fas fa-comments text-secondary"></i>
                                                            {{ $article->comments->count() }}
                                                        </li>
                                                    @endif
                                                    @if ($article->likedUsers)
                                                        <li class="ml-3" style="font-size: 14px;">
                                                            <i class="far fa-thumbs-up text-secondary"></i>
                                                            {{ $article->likedUsers->count() }}
                                                        </li>
                                                    @endif
                                                </ul>
                                                <div class="article-content">
                                                    {!! $article->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card mb-2 bg-gradient-dark">
                                <img class="card-img-top" src="{{ Storage::url($article->prev_img) }}"
                                    alt="{{ $article->title }}">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h4 class="card-title text-primary text-white">{{ $article->title }}</h4>
                                    <small class="card-text text-white pb-2 pt-1 text-small"><a href="#"
                                            class="text-white"><i class="fas fa-calendar"></i>
                                            {{ \carbon\Carbon::parse($article->created_at)->toFormattedDateString() }}</a></small>
                                    <p class="card-text text-white pb-2 pt-1"><a
                                            href="#">{{ $article->category->title }}</a></p>
                                    {{-- <a href="#"><span class="icon-chat"></span> {{ $article->comments->count() }}</a> --}}
                                    <a href="#"><i class="fas fa-comment"></i>
                                        @if ($article->comments)
                                            {{ $article->comments->count() }}
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
