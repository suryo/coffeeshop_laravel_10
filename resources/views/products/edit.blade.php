@extends('master')
@section('title')
    Edit Product
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Product
        @endslot
        @slot('title')
            Edit Product
        @endslot
    @endcomponent
    @foreach ($brand_name as $bn)
        @php
            $brandId = $bn->id;
            $brandName = $bn->product_brand;
        @endphp
    @endforeach
    @foreach ($category_name as $cn)
        @php
            $catId = $cn->id;
            $catName = $cn->product_category_name;
        @endphp
    @endforeach
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Product</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product->id) }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku" id="sku" class="form-control" value="{{ $product->sku }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-lg-6">
                                    <label for="product_brand">Product Brand</label>
                                    <select class="select2 form-control" name="product_brand" id="product_brand" required>
                                        <option value="{{ $brandId }}" selected>{{ $brandName }}</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->product_brand }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="product_category">Product Category</label>
                                    <select class="select2 form-control" name="product_category" id="product_category" required>
                                        <option value="{{ $catId }}" selected>{{ $catName }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->product_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-lg-6">
                                    <label for="product_price">Product price</label>
                                    <input type="number" name="product_price" id="product_price" class="form-control" value="{{ $product->product_price }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" name="product_image" id="product_image" class="form-control" value="{{ $product->fileimages }}">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-lg-12">
                                    <label for="Product_detail">Product Detail</label>
                                    <textarea name="product_detail" id="product_detail" class="form-control" rows="5">{{ $product->product_detail }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
                            <a href="/product" class="btn btn-secondary btn-sm position-absolute end-0 mt-3 me-3"><i class="uil uil-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
