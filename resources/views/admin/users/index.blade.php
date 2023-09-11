@extends('layouts.admin')
@section('title', 'Admin|Users')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
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
                        <p>{{ __('Users') }}: {{ $users->count() }}</p>
                    </div>
                    <div class="card-body">
                        @if ($users->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Role') }}</th>
                                    <th colspan="2">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td scope="row">{{ $user->id }}</td>
                                        <td>{{ __($user->name) }}</td>
                                        <td>{{ __($user->email) }}</td>
                                        <td>{{ __($user->role->title) }}</td>
                                        <td><a href="{{ route('admin.role.edit', $user) }}" class="btn btn-dark btn-sm">{{ __('Edit') }}</a></td>
                                        <td>
                                            <form action="{{ route('admin.role.delete', $user) }}" method="POST">
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
