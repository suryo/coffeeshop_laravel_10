@extends('master')
@section('title')
    Product Brands
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Product Brands
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product Brands</div>

                    <div class="card-body">
                        <a href="/product" class="btn btn-secondary btn-sm mb-3"><i class="uil uil-arrow-left"></i> Back</a>
                        <a href="{{ route('product_brands.create') }}" class="btn btn-success btn-sm mb-3"><i class="uil uil-plus"></i> Add Brands</a>

                        <table id="table" class="table display">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->product_brand }}</td>
                                        <td>{{ $brand->status }}</td>
                                        <td>
                                            <a href="{{ route('product_brands.show', $brand->id) }}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('product_brands.edit', $brand->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('product_brands.delete', $brand->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
    const table = new DataTable('#table',{});
</script>
@endsection