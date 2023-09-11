@extends('layouts.admin')
@section('title', 'Admin|Add Role')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Add Role') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index',[app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.role.index',[app()->getLocale()]) }}">{{ __('Roles') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Add Role') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header d-flex">
                            <a href="{{ route('admin.role.index',[app()->getLocale()]) }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Back') }}</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.role.store',[app()->getLocale()]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">{{ __('Role Name') }}</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') border-danger @enderror" autofocus
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>


                                <button type="submit" class="btn btn-dark">{{ __('Create Role') }}</button>
                            </form>
                        </div>
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
