@extends('layouts.admin')
@section('title', 'Admin|Categories')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Categories') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Categories') }}</li>
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
                        <p>{{ __('Categories') }}: {{ $categories->count() }}</p>
                        <a href="{{ route('admin.category.create') }}" class="btn btn-dark btn-sm ml-auto">{{ __('Add Category') }}</a>
                    </div>
                    <div class="card-body">
                        @if ($categories->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th >{{ __('Category title') }}</th>
                                    <th >{{ __('Slug') }}</th>
                                    <th >{{ __('Category meta_title') }}</th>
                                    <th >{{ __('Category meta_description') }}</th>
                                    <th >{{ __('Category meta_keywords') }}</th>
                                    <th colspan="2">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $category->id }}</td>
                                        <td>{{ __($category->title) }}</td>
                                        <td>{{ __($category->slug) }}</td>
                                        <td>{{ __($category->meta_title) }}</td>
                                        <td>{{ __($category->meta_description) }}</td>
                                        <td>{{ __($category->meta_keywords) }}</td>
                                        <td><a href="{{ route('admin.category.edit', $category->slug) }}" class="btn btn-dark btn-sm">{{ __('Edit') }}</a></td>
                                        <td>
                                            <form action="{{ route('admin.category.delete', $category->slug) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>

                        @else
                            <h4 class="card-title text-center">{{ __('Categories not found') }}</h4>
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
