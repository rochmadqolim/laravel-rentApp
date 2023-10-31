@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v3</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Waiting Approval</h3>
    
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Date Rent</th>
                          <th>Renter Name</th>
                          <th>Unit</th>
                          <th>Driver</th>
                          <th>Approved 1</th>
                          <th>Approved 2</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $iteration = 1 @endphp
                        @foreach ($rents as $item)
                        <tr>
                            <td>{{ $iteration++ }}</td>
                            <td>{{ $item->rent_date }}</td>  
                            <td>{{ $item->name }}</td>  
                            <td>{{ $item->unit->name }}</td>
                            <td>{{ $item->driver->name }}</td>
                            <td>{{ $item->approval_1 }}</td>
                            <td>{{ $item->approval_2 }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
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
    </div>
  </div>
@endsection
