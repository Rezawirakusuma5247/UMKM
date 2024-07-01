
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
            <h2>Edit Event</h2>
            <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $event->title }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="4" required>{{ $event->description }}</textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                    @if($event->image)
                        <img src="{{ Storage::url($event->image) }}" class="img-fluid mt-2" style="max-height: 150px;">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update Event</button>
            </form>
        </div>
    </section>
    <!-- /.content -->
  </div>

@endsection

<style>
    .event-image {
        height: 200px;
        object-fit: cover;
    }

    .event-description {
        height: 80px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4; /* number of lines to show */
        -webkit-box-orient: vertical;
    }
</style>

