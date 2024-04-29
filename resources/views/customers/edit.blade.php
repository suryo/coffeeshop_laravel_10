@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Customer</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('customers.update', $customer->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value="{{ $customer->nama_pelanggan }}">
                            </div>
                            <!-- Add other form fields here -->

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
