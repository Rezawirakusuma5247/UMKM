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
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="flex-col mt-3">
            <div class="col-12">
              <div class="card col-8 mx-auto">
                <div class="card-header">
                  <h3 class="card-title font-weight-bold">Profile Setting</h3>
                  </div>

                </div>
                <!-- /.card-header -->

                <div class="content mt-3">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <div class="card card-primary card-outline mb-3">
                            <div class="card-header font-weight-bold">
                                <thead><tr><th>Name</th></tr></thead>
                            </div>
                            <div class="card-body ">
                              <tbody><tr><td>{{ $data->name }}</td></tr></tbody>
                            </div>
                          </div>

                          <div class="card card-primary card-outline mb-3">
                            <div class="card-header font-weight-bold">
                                <thead><tr><th>Email</th></tr></thead>
                            </div>
                            <div class="card-body ">
                                <tbody><tr><td>{{ $data->email }}</td></tr></tbody>
                            </div>
                          </div>
                        <a href="{{ route('umkm.profile.edit',['id' => $data->id]) }}" class="btn btn-block btn-primary col-lg-2 row-cols-3 mx-auto">Edit Profie!</a><!-- /.card -->
                        <br>
                    </div>
                        <!-- /.col-md-6 -->


                            </div>
                          </div>
                        <!-- /.col-md-6 -->
                      </div>

                      <!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>

                  <!-- /.content -->
                </div>



                </div>
                <!-- /.card-body -->

              <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
