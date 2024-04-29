@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Customer</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('customers.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
                            </div>
                            <!-- Add other form fields here -->

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
