@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Stock</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Stock History</li>
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
                            <h5 class="card-title">Stock History</h5><br>
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <td>#SL</td>
                                        <td>Date</td>
                                        <td>Product</td>
                                        <td>Size</td>
                                        <td>Quantity</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($stocks)
                                        @foreach ($stocks as $key => $stock)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $stock->date ?? '' }}</td>
                                                <td>{{ $stock->product->name ?? '' }}</td>
                                                <td>{{ $stock->size->size ?? '' }}</td>
                                                <td>{{ $stock->quantity ?? '' }}</td>
                                                <td>{{ strtoupper($stock->status) ?? '' }}</td>

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
