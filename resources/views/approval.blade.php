@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $role->name }}</h1>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Waiting Approval</h3>

                                <div class="card-tools">
                                    <form action="approval" method="get">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request('search') }}">
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
                            <div class="card-body table-responsive p-0" style="height: 550px">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date Rent</th>
                                            <th>Renter Name</th>
                                            <th>Unit</th>
                                            <th>Driver</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $dataFound = false; @endphp

                                        @foreach ($rents as $item)
                                            @if (auth()->user()->role_id == 2 && $item->status == 'Waiting for first approval')
                                                @php $dataFound = true; @endphp
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <form action="approval" method="post">
                                                        @csrf
                                                        <input type="hidden" name="approve_id" value="{{ $item->id }}">
                                                        <td>{{ $item->rent_date }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->unit->name }}</td>
                                                        <td>{{ $item->driver->name }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>
                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </td>
                                                    </form>
                                                </tr>
                                            @endif
                                        @endforeach

                                        @foreach ($rents as $item)
                                            @if (auth()->user()->role_id == 3 && $item->status == 'Waiting Second Approval')
                                                @php $dataFound = true; @endphp
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <form action="approval" method="post">
                                                        @csrf
                                                        <input type="hidden" name="approve_id" value="{{ $item->id }}">
                                                        <td>{{ $item->rent_date }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->unit->name }}</td>
                                                        <td>{{ $item->driver->name }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>
                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </td>
                                                    </form>
                                                </tr>
                                            @endif
                                        @endforeach

                                        @if (!$dataFound)
                                            <tr>
                                                <td class="text-center" colspan="7">All Data Approved</td>
                                            </tr>
                                        @endif

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
