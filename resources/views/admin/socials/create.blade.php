@extends('layouts.admin')
@section('title', 'Admin|Add Social Link')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Add Social Link') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.social.index') }}">{{ __('socials links') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Add social link') }}</li>
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
                            <a href="{{ route('admin.social.index') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Back') }}</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.social.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="text" name="icon" id="icon" class="form-control"
                                        placeholder="icon">
                                    @error('icon')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link">link</label>
                                    <input type="text" name="link" id="link" class="form-control"
                                        placeholder="link">
                                    @error('link')
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
