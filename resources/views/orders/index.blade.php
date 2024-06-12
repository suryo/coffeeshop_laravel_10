@extends('master')
@section('title')
    Order
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Order
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Orders</div>

                    <div class="card-body">
                        <table id="table" class="table display cell-border">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nomor Order</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Item Subtotal</th>
                                    <th>Tax</th>
                                    <th>Shipping Price</th>
                                    <th>Total Order</th>
                                    <th>Payment</th>
                                    <th>Pengiriman</th>
                                    <th>Nama Lengkap</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Negara</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>kecamatan</th>
                                    <th>alamat</th>
                                    <th>kodepos</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>addcatatan</th>
                                    <th>payment_id</th>
                                    <th>payment_method</th>
                                    <th>payment_status</th>
                                    <th>tracking_number</th>
                                    <th>shipping_id</th>
                                    <th>country_code</th>
                                    <th>shipping_status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->nomerorder }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->ordertotal }}</td>
                                        <td>
                                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-success">Edit</a>
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
@section('script')
<script>
    const table = new DataTable('#table',{
        scrollX: true,
    });
</script>
@endsection
