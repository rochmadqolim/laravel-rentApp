@extends('layouts.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Return Confirmation</h1>
              </div>

          </div>
      </div>
      <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <!-- /.row -->
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">
                              Responsive Hover Table
                          </h3>

                          <div class="card-tools">
                              <div
                                  class="input-group input-group-sm"
                                  style="width: 150px"
                              >
                                  <input
                                      type="text"
                                      name="table_search"
                                      class="form-control float-right"
                                      placeholder="Search"
                                  />

                                  <div class="input-group-append">
                                      <button
                                          type="submit"
                                          class="btn btn-default"
                                      >
                                          <i
                                              class="fas fa-search"
                                          ></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                          <table
                              class="table table-hover text-nowrap"
                          >
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
                                @if ($item->status == "Rent Approved")
                                <tr>
                                    <form action="returnForm" method="post">
                                        @csrf
                                    <input type="hidden" name="unit_id" value="{{ $item->unit_id }}">
                                    <input type="hidden" name="driver_id" value="{{ $item->driver_id }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->unit->name }}</td>
                                    <td>{{ $item->driver->name }}</td>
                                    <td>
                                      <input type="submit" class="btn btn-primary btn-lg" value="Return">
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
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection