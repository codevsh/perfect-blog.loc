@extends('layouts.admin')
@section('title', 'Admin|Add Article')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Add Article') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.article.index') }}">{{ __('Articles') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Add Article') }}</li>
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
                            <a href="{{ route('admin.article.index') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Back') }}</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @livewire('admin.article-slug-store-component')
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }}<span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('description') border-red @enderror" name="description" id="description"
                                        rows="3">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Preview Image') }}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="prev_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('prev_img')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Main Image') }}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="main_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('main_img')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category_id">{{ __('Category') }}</label>
                                    <select class="form-control" name="category_id" id="category_id" data-placeholder="{{ __('Select category') }}">
                                        <option>{{ __('Category') }}</option>
                                        @foreach ($categories as $category)
                                            <option {{ old('category_id') == $category->id ? ' selected' : '' }}
                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Tags') }}</label>
                                    <select class="select2" multiple="multiple" data-placeholder="{{ __('Select a Tags') }}"
                                        style="width: 100%;" name="tag_ids[]">
                                        @foreach ($tags as $tag)
                                            <option
                                                {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }}
                                                value="{{ $tag->id }}">
                                                {{ $tag->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('tag_ids')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="dropdown-divider"></div>
                                <h3 class="text-center my-5">{{ __('Meta Data') }}</h3>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="meta_title">{{ __('meta_title') }}</label>
                                        <input type="text" name="meta_title" id="meta_title"
                                            class="form-control @error('meta_title') border-danger @enderror" autofocus
                                            value="{{ old('meta_title') }}" wire:model='meta_title'>
                                        @error('meta_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group col-6">
                                        <label for="meta_keywords">{{ __('meta_keywords') }}</label>
                                        <input type="text" name="meta_keywords" id="meta_keywords"
                                            class="form-control @error('meta_keywords') border-danger @enderror" autofocus
                                            value="{{ old('meta_keywords') }}" wire:model='meta_keywords'>
                                        @error('meta_keywords')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta_description">{{ __('meta_description') }}</label>
                                    <textarea class="form-control @error('meta_description') border-danger @enderror" name="meta_description"
                                        id="meta_description" rows="3" wire:model='meta_description'>{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-dark">{{ __('Create') }}</button>
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
@push('scripts')
    <script>
        $(function() {
            $('.select2').select2();
            bsCustomFileInput.init();
            $('#description').summernote({
                height: 200
            })
        });
    </script>
@endpush
