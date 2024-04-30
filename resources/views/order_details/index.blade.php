@extends('master')
@section('title')
    Order Detail
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Order Detail
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Order Details</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nomor Order</th>
                                    <th>Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderDetails as $orderDetail)
                                    <tr>
                                        <td>{{ $orderDetail->id }}</td>
                                        <td>{{ $orderDetail->nomerorder }}</td>
                                        <td>{{ $orderDetail->product->product_name }}</td>
                                        <td>{{ $orderDetail->hargaproduk }}</td>
                                        <td>{{ $orderDetail->qty }}</td>
                                        <td>{{ $orderDetail->subtotalproduk }}</td>
                                        <td>
                                            <a href="{{ route('order_details.show', $orderDetail->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('order_details.edit', $orderDetail->id) }}" class="btn btn-success">Edit</a>
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
