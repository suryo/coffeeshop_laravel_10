@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Customer Detail</div>

                    <div class="card-body">
                        <p><strong>Nama Pelanggan:</strong> {{ $customer->nama_pelanggan }}</p>
                        <p><strong>Alamat:</strong> {{ $customer->alamat }}</p>
                        <p><strong>No. Telepon:</strong> {{ $customer->no_telp }}</p>
                        <!-- Add other customer details here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
