@extends('layouts.admin')
@section('title', 'Admin|About')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('About') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('About') }}</li>
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

                            <a href="{{ route('admin.about.create') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Create Page') }}</a>
                        </div>
                        <div class="card-body">
                            @if ($abouts->count() > 0)
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Image') }}</th>
                                            <th>{{ __('Content') }}</th>
                                            <th colspan="3">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abouts as $about)
                                            <tr>
                                                <td scope="row">{{ $about->id }}</td>
                                                <td><img class="w-50" src="{{ Storage::url($about->image) }}"
                                                        alt="{{ $about->title }}"></td>
                                                <td>{{ __(mb_strimwidth($about->content, 0, 46, ' (...)')) }}</td>
                                                <td><a href="{{ route('admin.about.show', $about) }}"
                                                        class="btn btn-warning btn-sm">{{ __('Look') }}</a></td>
                                                <td><a href="{{ route('admin.about.edit', $about) }}"
                                                        class="btn btn-dark btn-sm">{{ __('Edit') }}</a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4 class="card-title text-center">{{ __('About not found') }}</h4>
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
