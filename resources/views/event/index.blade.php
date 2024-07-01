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
            <h2>Data Event UMKM</h2>
            <a href="{{ route('event.create') }}" class="btn btn-block btn-primary col-lg-2 row-cols-3 mt-1 mb-1">Add Data</a>
            <p>List of events:</p>

            @if($events->isEmpty())
                <p>No events available</p>
            @else
                <div class="row">
                    @foreach($events as $event)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ Storage::url($event->image) }}" class="card-img-top event-image" alt="{{ $event->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->title }}</h5>
                                    <p class="card-text event-description">{{ $event->description }}</p>
                                    <div class="d-flex g-5">
                                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-primary me-2">Edit</a>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $event->id }}">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{ $event->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete "{{ $event->title }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('event.delete', $event->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    @endforeach
                </div>
            @endif
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

    .g-5 {
        gap: 1rem;
    }
</style>

<script>
    var deleteModals = document.querySelectorAll('.modal');

    deleteModals.forEach(modal => {
        modal.addEventListener('shown.bs.modal', function () {
            modal.querySelector('button[type=submit]').focus();
        });
    });
</script>
