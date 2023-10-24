@extends('layouts.admin')
@section('title', 'Admin|Social Links')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Social Links') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Social Links') }}</li>
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
                            <p>{{ __('Social Links') }}: {{ $socials->count() }} {{ __('from') }}: {{ $socials->total() }}</p>
                            <a href="{{ route('admin.social.create') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Add Link') }}</a>
                        </div>
                        <div class="card-body">
                            @if ($socials->count() > 0)
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Icon') }}</th>
                                            <th>{{ __('Link') }}</th>
                                            <th colspan="3">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($socials as $social)
                                            <tr>
                                                <td scope="row">{{ $social->id }}</td>
                                                <td>{!! $social->icon !!}</td>
                                                <td>{{ $social->link }}</td>
                                                <td><a href="{{ route('admin.social.edit', $social) }}"
                                                        class="btn btn-dark btn-sm">{{ __('Edit') }}</a></td>
                                                <td>
                                                    <form action="{{ route('admin.social.delete', $social) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            @else
                                <h4 class="card-title text-center">{{ __('Social links not found') }}</h4>
                            @endif
                        </div>
                        <div class="card-footer">
                            {{ $socials->links('pagination::bootstrap-5') }}
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
