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
                    <div class="card-header">Edit Product Brand</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product_brands.update', $brand->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="product_brand">Product Brand Name</label>
                                <input type="text" class="form-control" id="product_brand" name="product_brand" value="{{ $brand->product_brand }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
                            <a href="/productbrand" class="btn btn-secondary btn-sm position-absolute end-0 mt-3 me-3"><i class="uil uil-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
