@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Show</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product Show</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Product Info</h5><br />
                            <div class="card-body">
                                <table class="table table-sm table-bordered">
                                    <tr>
                                        <td>Product Name</td>
                                        <td>{{ $product->name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{ $product->category->name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>{{ $product->brand->name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>SKU</td>
                                        <td>{{ $product->sku ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Cost Price($)</td>
                                        <td>{{ $product->cost_price ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Retail Price($)</td>
                                        <td>{{ $product->retail_price ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Year</td>
                                        <td>{{ $product->year ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{ $product->description ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{ $product->status ? 'Active' : 'In-Active' }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-sm btn-dark" href="{{ route('products.index') }}"><i
                                        class="fa fa-arrow-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Image</h5><br />
                            <div class="card-body text-center">
                                <img width="200px" src="{{ asset('public/Product_Image/' . $product->image) }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Product Stock</h5><br />
                            <div class="card-body">
                                <table class="table table-sm table-bordered">
                                    @foreach ($product->product_stocks as $p_stock)
                                        <tr>
                                            <td>{{ $p_stock->size->size ?? '' }}</td>
                                            <td>{{ $p_stock->location ?? '' }}</td>
                                            <td>{{ $p_stock->quantity ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
