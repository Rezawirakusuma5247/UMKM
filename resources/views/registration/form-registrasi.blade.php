@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container mt-5">
            <h2 class="mx-auto">Register for Event: </h2>
            <div class="card card-primary card-outline mb-3 col-3">
                <div class="card-header font-weight-bold">
                    <thead><tr><th>{{ $event->title }}</th></tr></thead>
                </div>
                <div class="card-body">
                    <tbody><tr><td><img src="{{ Storage::url($event->image) }}" alt="Event Image" class="img-fluid mb-4 shadow-sm border border-light" style="max-width: 250px;"></td></tr></tbody>
                </div>
            </div>
            <form action="{{ route('regis.store-registrasi') }}" method="POST">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <div class="form-group mb-3">
                    <label for="number">Masukan Nomor telp, atau akun google mu <small>(untuk pemberitahuan)</small></label>
                    <input type="text" class="form-control" id="number" name="number" required>
                </div>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="umkm">UMKM</label>
                    <input type="text" class="form-control" id="umkm" name="umkm" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
