@extends('master')
@section('title')
    Product
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Product
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <a href="{{ route('products.create') }}"><button class="btn btn-success btn-sm mb-3"><i class="uil uil-plus"></i> Add Product</button></a>
                        <a href="/productcategory"><button class="btn btn-primary btn-sm mb-3"><i class="uil uil-archive"></i> Category Product</button></a>
                        <a href="/productbrand"><button class="btn btn-primary btn-sm mb-3"><i class="uil uil-tag-alt"></i> Brand Product</button></a>
                        <table id="table" class="table display cell-border">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Images</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_category }}</td>
                                        <td>{{ $product->product_brand }}</td>
                                        <td>{{ $product->product_price }}</td>
                                        <td>{{ $product->fileimages }}</td>
                                        <td>{{ $product->product_detail }}</td>
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('products.delete', $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
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

