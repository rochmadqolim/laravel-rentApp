@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $auth->name }}</h1>
                        <h5 class="m-0" style="font-size: 17px">{{ $auth->role->name }}</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal Detail-->
        @foreach ($drivers as $item)
            <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="detailModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabel">Detail Driver</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="update-form-{{ $item->id }}" action="update/driver/{{ $item->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Driver Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $item->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="phone" class="form-control" id="phone" name="phone"
                                        value="{{ $item->phone }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- End Modal Detail-->

        <!-- Main content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-primary ">
                        <div class="card-header">
                            <h3 class="card-title">Add New Driver</h3>
                        </div>
                        <form action="driver" method="POST">
                            @csrf
                            <div class="card-body" style="height: 250px;">
                                <div class="form-group">
                                    <label for="driver_name">Driver Name</label>
                                    <input type="text" class="form-control col-10" id="name" name="name"
                                        placeholder="Enter Driver Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="driver_number">Number</label>
                                    <input type="text" class="form-control col-10" id="phone" name="phone"
                                        placeholder="Enter Phone Number">
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
                                <form action="driver" method="get">
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
                                        <th>Driver</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($drivers as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td style="color: {{ $item->status === 'Available' ? 'green' : 'red' }}">
                                                {{ $item->status }}
                                            </td>

                                            <td>
                                                @if ($item->status == 'Available')
                                                    <a href="#" data-toggle="modal"
                                                    data-target="#detailModal{{ $item->id }}"
                                                    class="btn btn-primary fs-5">
                                                    Update
                                                </a>
                                                    <form action="driver/{{ $item->id }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-md delete-action">Delete</button>
                                                    </form>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteButtons = document.querySelectorAll(".delete-action");

            deleteButtons.forEach((button) => {
                button.addEventListener("click", function(event) {
                    event.preventDefault();

                    Swal.fire({
                        title: "Delete User?",
                        text: "Are you sure you want to delete this user?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            button.parentElement.submit();

                            Swal.fire({
                                title: "User Deleted",
                                text: "The user has been deleted successfully.",
                                icon: "success",
                            });
                        }
                    });
                });
            });
        });
    </script>
