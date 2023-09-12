@extends('layouts.admin')
@section('title', __('Edit User'))
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit User') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">{{ __('Users') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Edit User') }}</li>
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
                            <a href="{{ route('admin.user.index') }}"
                                class="btn btn-dark btn-sm ml-auto">{{ __('Back') }}</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.user.update', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="role_id">{{ $user->name }} {{ __('Role') }}</label>
                                        <select class="form-control" name="role_id" id="role_id">
                                            @foreach ($roles as $role)
                                                <option {{ $role->id == $user->role_id ? ' selected' : '' }}
                                                    value="{{ $role->id }}">{{ __( $role->title) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('role_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-dark">{{ __('Edit role') }}</button>
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
