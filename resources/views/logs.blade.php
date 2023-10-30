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
                    <h3 class="card-title">Fixed Header Table</h3>
    
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
                          <th>Renter</th>
                          <th>Unit</th>
                          <th>Driver</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</span></td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>11-7-2014</td>
                          <td>John Doe</td>
                          <td>Exkavator</td>
                          <td>Yatno</td>
                          <td>Waiting Approval</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
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
                    <th>Date</th>
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Driver</th>
                    <th>Approved 1</th>
                    <th>Approved 2</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      Some Product
                    </td>
                    <td>$13 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Another Product
                    </td>
                    <td>$29 USD</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Amazing Product
                    </td>
                    <td>$1,230 USD</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>$199 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
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