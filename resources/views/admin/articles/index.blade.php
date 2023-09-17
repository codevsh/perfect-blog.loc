@extends('layouts.admin')
@section('title', 'Admin|Articles')
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
                        <li class="breadcrumb-item active">{{ __('Articles') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <p>{{ __('Articles') }}: {{ $articles->count() }}</p>
                            <a href="{{ route('admin.article.create') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Add Article') }}</a>
                        </div>
                        <div class="card-body">
                            @if ($articles->count() > 0)
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Image') }}</th>
                                            <th>{{ __('Title') }}</th>
                                            <th>{{ __('Category') }}</th>
                                            <th>{{ __('Description') }}</th>
                                            <th colspan="3">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article)
                                            <tr>
                                                <td scope="row">{{ $article->id }}</td>
                                                <td><img class="w-50" src="{{ Storage::url($article->prev_img) }}"
                                                        alt="{{ $article->title }}"></td>
                                                <td>{{ __($article->title) }}</td>
                                                <td>{{ $article->category->title }}</td>
                                                <td>{{ __(mb_strimwidth($article->description, 0, 46, ' (...)')) }}</td>
                                                <td>{{ __($article->meta_keywords) }}</td>
                                                <td><a href="{{ route('admin.article.show', $article->slug) }}" class="btn btn-warning btn-sm">{{ __('Look') }}</a></td>
                                                <td><a href="{{ route('admin.article.edit', $article->slug) }}"
                                                        class="btn btn-dark btn-sm">{{ __('Edit') }}</a></td>
                                                <td>
                                                    <form action="{{ route('admin.article.delete', $article->slug) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4 class="card-title text-center">{{ __('Articles not found') }}</h4>
                            @endif
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
