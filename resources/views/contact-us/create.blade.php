@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact Us</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container mt-5">
            <h2>Give Us Your Message</h2>
            <p>Fill out the form below according to your concerns:</p>

            <form action="{{ route('lina.contact-us.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">masukan Akun google mu</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="google@gmail.com" required>
                </div>
                <div class="form-group mb-3">
                    <label for="name">Nomor telepon</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Nomor Telepon" required>
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
