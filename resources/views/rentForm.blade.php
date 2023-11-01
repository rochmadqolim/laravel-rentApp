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
  
  <section class="content col-6 ">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Create Transaction</h3>
        </div>
        <div class="card-body">
          <form action="" method="post">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Renter Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <label>Select Unit</label>
                  <select name="unit_id" id="unit" class="form-control select2" style="width: 100%">
                    <option selected="selected">Choose Unit</option>
                    @foreach ($units as $item)
                    <option value="{{ $item->id }}" @if ($item->status === 'Unit Not Available') disabled @endif>
                        {{ $item->name }} - {{ $item->brand }}
                    </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Driver</label>
                  <select name="driver_id" id="driver" class="form-control select2" style="width: 100%">
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
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection