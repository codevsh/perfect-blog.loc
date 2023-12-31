@extends('layouts.admin')
@section('title', 'Admin|Home')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Admin-Panel') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index', app()->getLocale()) }}">{{ __('Home') }}</a></li>
                        {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-success">{{ session('error') }}</div>
            @endif
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>({{ $categories->count() }})</h3>


                            <p>{{ __('Categories') }} </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-th-list"></i>
                        </div>
                        <a href="{{ route('admin.category.index') }}" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>({{ $tags->count() }})</h3>

                            <p>{{ __('Tags') }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <a href="{{ route('admin.tag.index') }}" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>({{ $users->count() }})</h3>

                            <p>{{ __('Users') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('admin.user.index') }}" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>({{ $articles->count() }})</h3>

                            <p>{{ __('Articles') }}</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file"></i>
                        </div>
                        <a href="{{ route('admin.article.index') }}" class="small-box-footer">{{ __('More info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
