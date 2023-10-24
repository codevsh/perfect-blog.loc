@extends('layouts.admin')
@section('title', 'Admin|About Show')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('About Show') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('About Show') }}</li>
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

                            <a href="{{ route('admin.about.index') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Back') }}</a>
                        </div>
                        <div class="card-header d-flex justify-content-between">
                            <a href="{{ route('admin.about.edit', $about) }}"
                                class="btn btn-success btn-sm">{{ __('Edit') }}</a>

                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6"><img class="img-fluid" src="{{ Storage::url($about->image) }}" alt="About Image"></div>
                                <div class="col-md-6 my-auto">{!! $about->content !!}
                                    <a href="#" class="btn btn-dark mt-3">{{ __('See My Portfolio') }}</a>
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
