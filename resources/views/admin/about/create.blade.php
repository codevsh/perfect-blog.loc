@extends('layouts.admin')
@section('title', 'Admin|About Create')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('About Create') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">{{ __('Abouts') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('About Create') }}</li>
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
                        <div class="card-body">
                            <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{ __('Image') }}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name="image">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="content"></label>
                                        <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') }}</textarea>
                                        @error('content')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </form>
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
@push('scripts')
    <script>
        $(function() {
            $('.select2').select2();
            bsCustomFileInput.init();
            $('#content').summernote({
                height: 200
            })
        });
    </script>
@endpush
