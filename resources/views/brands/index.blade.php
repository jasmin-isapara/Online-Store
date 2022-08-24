@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Brands</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Brand List</li>
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
                            <h5 class="card-title">Brand List</h5><br>

                            <a href="{{ route('brands.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>
                                Add Brand</a><br><br>

                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <td>#SL</td>
                                        <td>Name</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($brands)
                                        @foreach ($brands as $key => $brand)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $brand->name ?? '' }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-info "
                                                        href="{{ route('brands.edit', $brand->id) }}">
                                                        <i class="fa fa-edit"> Edit</i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm btn-danger sa-delete"
                                                        data-form-id="brand-delete-{{ $brand->id }}">
                                                        <i class="fa fa-trash"> Delete</i>
                                                    </a>

                                                    <form method="post" id="brand-delete-{{ $brand->id }}"
                                                        action="{{ route('brands.destroy', $brand->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

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
