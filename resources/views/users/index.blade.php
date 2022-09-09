@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">User List</h5><br>

                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>
                                Add User</a><br><br>
                            {{-- <example-component></example-component> --}}
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <td>#SL</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Created At</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users)
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $user->name ?? '' }}</td>
                                                <td>{{ $user->email ?? '' }} @if (auth()->id() == $user->id)
                                                        (you)
                                                    @endif
                                                </td>
                                                <td>{{ $user->created_at->format('Y-m-d') ?? '' }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-info "
                                                        href="{{ route('users.edit', $user->id) }}">
                                                        <i class="fa fa-edit"> Edit</i>
                                                    </a>
                                                    @if (auth()->id() != $user->id)
                                                        <a href="javascript:;" class="btn btn-sm btn-danger sa-delete"
                                                            data-form-id="user-delete-{{ $user->id }}">
                                                            <i class="fa fa-trash"> Delete</i>
                                                        </a>

                                                        <form method="post" id="user-delete-{{ $user->id }}"
                                                            action="{{ route('users.destroy', $user->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div><!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
