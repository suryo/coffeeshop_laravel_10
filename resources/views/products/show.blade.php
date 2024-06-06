@extends('master')
@section('title')
    Product Detail
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Product
        @endslot
        @slot('title')
            Product Detail
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product Detail</div>

                    <div class="card-body">
                        <p><strong>SKU:</strong> {{ $product->sku }}</p>
                        <p><strong>Name:</strong> {{ $product->product_name }}</p>
                        <p><strong>Category:</strong> {{ $product->product_category }}</p>
                        <p><strong>Brand:</strong> {{ $product->product_brand }}</p>
                        <p><strong>Price:</strong> {{ $product->product_price }}</p>
                        <p><strong>Images:</strong> {{ $product->fileimages }}</p>
                        <a href="/product" class="btn btn-secondary btn-sm position-absolute end-0"><i class="uil uil-arrow-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
