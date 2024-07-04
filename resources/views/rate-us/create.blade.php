@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rate Us</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container mt-1">
            <h2>Give Us Your Rating</h2>
            <p>Fill out the form below and rate us from 1 to 5 stars:</p>

            <form action="{{ route('rate.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="rating">Rating (1-5)</label>
                    <select class="form-control" id="rating" name="rating" required>
                        <option value="1">1 Star</option>
                        <option value="2">2 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="5">5 Stars</option>
                    </select>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="message" class="mb-1">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
