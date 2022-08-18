@extends('layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categories</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">

                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Category List</h5><br>
                            
                            <table class="table table-bordered datatable    ">
                                <thead>
                                    <tr>
                                        <td>#SL</td>
                                        <td>Name</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($categories)
                                        @foreach ($categories as $key => $category )
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $category->name ?? '' }}</td>
                                                <td>action</td>
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
