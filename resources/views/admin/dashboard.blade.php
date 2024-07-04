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
        <div class="row mt-4">
          <div class="col-12">
            <div class="card col-12 mx-auto">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">Admin Dashboard</h3>
              </div>
            </div>
            <div class="content mt-3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data User</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('admin.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data Event</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('event.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data Registration</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('regis.regis.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card card-primary card-outline mb-3">
                      <div class="card-header font-weight-bold">
                        <h5 class=" font-weight-bold">Data Contact</h5>
                      </div>
                      <div class="card-body">
                        <a href="{{ route('lina.contact-us.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <div class="card card-primary card-outline mb-3">
                        <div class="card-header font-weight-bold">
                          <h5 class=" font-weight-bold">List Data Regis</h5>
                        </div>
                        <div class="card-body">
                          <a href="{{ route('regis.regis.list') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="card card-primary card-outline mb-3">
                        <div class="card-header font-weight-bold">
                          <h5 class=" font-weight-bold">Data Rate</h5>
                        </div>
                        <div class="card-body">
                          <a href="{{ route('rate.index') }}" class="btn btn-block btn-primary col-3 mx-auto">Check!</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
