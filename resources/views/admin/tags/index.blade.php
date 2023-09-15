@extends('layouts.admin')
@section('title', 'Admin|Tags')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Tags') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Tags') }}</li>
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
                        <p>{{ __('Tags') }}: {{ $tags->count() }}</p>
                        <a href="{{ route('admin.tag.create') }}" class="btn btn-dark btn-sm ml-auto">{{ __('Add Tag') }}</a>
                    </div>
                    <div class="card-body">
                        @if ($tags->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th >{{ __('Tag title') }}</th>
                                    <th >{{ __('Slug') }}</th>
                                    <th >{{ __('Tag meta_title') }}</th>
                                    <th >{{ __('Tag meta_description') }}</th>
                                    <th >{{ __('Tag meta_keywords') }}</th>
                                    <th colspan="2">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                    <tr>
                                        <td scope="row">{{ $tag->id }}</td>
                                        <td>{{ __($tag->title) }}</td>
                                        <td>{{ __($tag->slug) }}</td>
                                        <td>{{ __($tag->meta_title) }}</td>
                                        <td>{{ __($tag->meta_description) }}</td>
                                        <td>{{ __($tag->meta_keywords) }}</td>
                                        <td><a href="{{ route('admin.tag.edit', $tag->slug) }}" class="btn btn-dark btn-sm">{{ __('Edit') }}</a></td>
                                        <td>
                                            <form action="{{ route('admin.tag.delete', $tag->slug) }}" method="POST">
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
                            <h4 class="card-title text-center">{{ __('Tags not found') }}</h4>
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
