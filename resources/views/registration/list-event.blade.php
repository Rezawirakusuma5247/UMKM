@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Approved Event Registrations</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container mt-2">
            <h1>Approved Registrations</h1>

            @foreach($registrations->groupBy('event_id') as $eventRegistrations)
                <h4>{{ $eventRegistrations->first()->event->title }}</h4>
                <table class="table table-bordered mt-3 mb-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>UMKM</th>
                            <th>Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eventRegistrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->name }}</td>
                            <td>{{ $registration->umkm }}</td>
                            <td>{{ $registration->number }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach

        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
