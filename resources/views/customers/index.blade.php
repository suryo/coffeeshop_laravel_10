@extends('master')
@section('title')
    Customer
@endsection

@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Customer
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Customers</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>No. Telepon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->nama_pelanggan }}</td>
                                        <td>{{ $customer->alamat }}</td>
                                        <td>{{ $customer->no_telp }}</td>
                                        <td>{{ $customer->status }}</td>
                                        <td>
                                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
