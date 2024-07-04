@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Ratings</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container mt-2">
            <h2>User Ratings</h2>

            <table class="table table-bordered mt-3 mb-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ratings as $rating)
                    <tr>
                        <td>{{ $rating->id }}</td>
                        <td>{{ $rating->name }}</td>
                        <td>{{ $rating->rating }}</td>
                        <td>{{ $rating->message }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
