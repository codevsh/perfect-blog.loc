@extends('layouts.admin')
@section('title', 'Admin|Edit Tag')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit Tag') }} {{ $tag->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">{{ __('Tags') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Edit Tag') }}</li>
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
                            <a href="{{ route('admin.tag.index') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Back') }}</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.tag.update', $tag->slug) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                @livewire('admin.tag-slag-update-component', ['tag' =>$tag])

                                <div class="dropdown-divider"></div>
                                <h3 class="text-center my-5">{{ __('Meta Data') }}</h3>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="meta_title">{{ __('Tag meta_title') }}</label>
                                        <input type="text" name="meta_title" id="meta_title"
                                            class="form-control @error('meta_title') border-danger @enderror" autofocus
                                            value="{{ $tag->meta_title }}" wire:model='meta_title'>
                                        @error('meta_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group col-6">
                                        <label for="meta_keywords">{{ __('Tag meta_keywords') }}</label>
                                        <input type="text" name="meta_keywords" id="meta_keywords"
                                            class="form-control @error('meta_keywords') border-danger @enderror" autofocus
                                            value="{{ $tag->meta_keywords }}" wire:model='meta_keywords'>
                                        @error('meta_keywords')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">{{ __('Tag meta_description') }}</label>
                                    <textarea class="form-control @error('meta_description') border-danger @enderror" name="meta_description"
                                        id="meta_description" rows="3" wire:model='meta_description'>{{ $tag->meta_description }}</textarea>
                                    @error('meta_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-dark">{{ __('Edit Tag') }}</button>
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
