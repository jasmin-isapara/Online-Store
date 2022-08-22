@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product List</li>
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
                            <h5 class="card-title">Product List</h5><br>

                            <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary"><i
                                    class="fa fa-plus"></i> Add Product</a><br><br>
                            {{-- <example-component></example-component> --}}
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <td>#SL</td>
                                        <td>Name</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($products)
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $product->name ?? '' }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-info "
                                                        href="{{ route('products.edit', $product->id) }}">
                                                        <i class="fa fa-edit"> Edit</i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-sm btn-danger sa-delete"
                                                        data-form-id="product-delete-{{ $product->id }}">
                                                        <i class="fa fa-trash"> Delete</i>
                                                    </a>

                                                    <form method="post" id="product-delete-{{ $product->id }}"
                                                        action="{{ route('products.destroy', $product->id) }}">
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
