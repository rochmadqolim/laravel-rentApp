@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $name }}</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



        <!-- Main content -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Unit</h3>
                        </div>
                        <form>
                            <div class="card-body pt-3" style="height: 250px;">
                                <div class="form-group">
                                    <label for="name">Unit Name</label>
                                    <input type="text" class="form-control col-10" id="name"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Unit Brand</label>
                                    <select name="brand_id" id="brand" class="form-control select2 col-10">
                                        <option selected="selected">Select Brand</option>
                                        @foreach ($brands as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Driver List</h3>
                            <div class="card-tools">
                                <form action="unit" method="get">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="search" class="form-control float-right"
                                            placeholder="Search" value="{{ request('search') }}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 550px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Unit</th>
                                        <th>Brand</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($units as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->brand->name }}</td>
                                            <td style="color: {{ $item->status === 'Unit Available' ? 'green' : 'red' }}">
                                                {{ $item->status }}
                                            </td>

                                            <td>
                                                @if ($item->status == 'Unit Available')
                                                    <button>uuuu</button>
                                                    <button>dddd</button>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.content -->
    @endsection
