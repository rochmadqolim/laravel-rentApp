@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $name }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Completed Transaction</h3>
                <div class="card-tools">
                  <a href="export" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Driver</th>
                    <th>Approved 1</th>
                    <th>Approved 2</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($rents as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->rent_date }}</td>  
                        <td>{{ $item->return_date }}</td>  
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
            </div>
            <!-- /.card -->
          </div>
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection