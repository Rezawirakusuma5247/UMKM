@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="row">
            <!-- left column -->
            <div class="col-md-5 mx-auto">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Isi Data</h3>
                 </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Foto</label>
                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="image...">
                        @error('image')
                          <small>{{ $message }}</small>
                        @enderror
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name...">
                          @error('name')
                            <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="...@gmail.com">
                              @error('email')
                                <small>{{ $message }}</small>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                  <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="...">
                                  @error('password')
                                    <small>{{ $message }}</small>
                                  @enderror
                                </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
@endsection
