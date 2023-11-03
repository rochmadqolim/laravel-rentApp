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


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Rent Form</h3>
                        </div>
                        <div class="card-body">
                            <form action="rent" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="name">Renter Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Select Unit</label>
                                            <select name="unit_id" id="unit" class="form-control select2"
                                                style="width: 100%">
                                                <option selected="selected">Choose Unit</option>
                                                @foreach ($units as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->status === 'Unit Not Available') disabled @endif>
                                                        {{ $item->name }} - {{ $item->brand->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Driver</label>
                                            <select name="driver_id" id="driver" class="form-control select2"
                                                style="width: 100%">
                                                <option selected="selected">Choose Driver</option>
                                                @foreach ($drivers as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-5 float-right mt-5">
                                    <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Return Confirmation
                            </h3>

                            <div class="card-tools">
                                <form action="form" method="get">
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
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Renter Name</th>
                                        <th>Unit</th>
                                        <th>Driver</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rents as $item)
                                        @if ($item->status == 'Rent Approved')
                                            <tr>
                                                <form action="return" method="post">
                                                    @csrf
                                                    <input type="hidden" name="unit_id" value="{{ $item->unit_id }}">
                                                    <input type="hidden" name="driver_id" value="{{ $item->driver_id }}">
                                                    <td> {{ $loop->iteration }}</td>
                                                    <td> {{ $item->name }}</td>
                                                    <td> {{ $item->unit->name }}</td>
                                                    <td> {{ $item->driver->name }}</td>
                                                    <td>
                                                        <input type="submit" class="btn btn-primary btn-lg" value="Returned">
                                                    </td>
                                                </form>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </div>
@endsection
