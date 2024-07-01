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
            <h2>Registrations</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event</th>
                        <th>Name</th>
                        <th>UMKM</th>
                        <th>Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrations as $registration)
                    <tr>
                        <td>{{ $registration->id }}</td>
                        <td>{{ $registration->event ? $registration->event->title : 'No Event' }}</td>
                        <td>{{ $registration->name }}</td>
                        <td>{{ $registration->umkm }}</td>
                        <td>{{ $registration->number }}</td>
                        <td>
                            <div class="d-flex">
                                @if(!$registration->approved)
                                <a href="{{ route('regis.approve', $registration->id) }}" class="btn btn-success btn-sm me-2 mt-3  ">Approve</a>
                                @endif
                                <button type="button" class="btn btn-danger btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $registration->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $registration->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $registration->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $registration->id }}">Confirm Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this registration?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('regis.delete', $registration->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection

<style>
    .d-flex {
        display: flex;
        align-items: center;
    }

    .me-2 {
        margin-right: 0.5rem;
    }
</style>

@section('scripts')
<script>
    var deleteModals = document.querySelectorAll('.modal');

    deleteModals.forEach(modal => {
        modal.addEventListener('shown.bs.modal', function () {
            modal.querySelector('button[type=submit]').focus();
        });
    });
</script>
@endsection
