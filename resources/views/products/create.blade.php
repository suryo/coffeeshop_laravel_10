@extends('master')
@section('title')
    Product
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Product
        @endslot
        @slot('title')
            Create
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Product</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku" id="sku" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" id="product_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-lg-6">
                                    <label for="product_brand">Product Brand</label>
                                    <select class="select2 form-control" name="product_brand" id="product_brand" required>
                                        <option value disabled selected>Choose Product Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->product_brand }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="product_category">Product Category</label>
                                    <select class="select2 form-control" name="product_category" id="product_category" required>
                                        <option value disabled selected>Choose Product Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->product_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-lg-6">
                                    <label for="product_price">Product price</label>
                                    <input type="number" name="product_price" id="product_price" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" name="product_image" id="product_image" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-lg-12">
                                    <label for="Product_detail">Product Detail</label>
                                    <textarea name="product_detail" id="product_detail" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Create</button>
                            <a href="/product" class="btn btn-secondary btn-sm position-absolute end-0 mt-3 me-3"><i class="uil uil-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
