@extends('layouts.admin')
@section('title', 'Admin|Roles')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Roles') }}</h1>
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
            <div class="row">
               <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <p>{{ __('Roles') }}: {{ $roles->count() }}</p>
                        <a href="{{ route('admin.role.create', app()->getLocale()) }}" class="btn btn-dark btn-sm ml-auto">{{ __('Add Role') }}</a>
                    </div>
                    <div class="card-body">
                        @if ($roles->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="w-75">{{ __('Role Name') }}</th>
                                    <th colspan="2">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td scope="row">{{ $role->id }}</td>
                                        <td>{{ __($role->title) }}</td>
                                        <td><a href="{{ route('admin.role.edit', [app()->getLocale(), $role]) }}" class="btn btn-dark btn-sm">{{ __('Edit') }}</a></td>
                                        <td>
                                            <form action="{{ route('admin.role.delete', [app()->getLocale(), $role]) }}" method="POST">
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
                            <h4 class="card-title text-center">{{ __('Roles not found') }}</h4>
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
