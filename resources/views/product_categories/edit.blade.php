@extends('master')
@section('title')
    Product Categories
@endsection
@section('content')
    @component('layouts.breadcrumb')
        @slot('pagetitle')
            Coffee Shop
        @endslot
        @slot('title')
            Product Categories
        @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Product Category</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('product_categories.update', $category->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="product_category_name">Product Category Name</label>
                                <input type="text" class="form-control" id="product_category_name" name="product_category_name" value="{{ $category->product_category_name }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
                            <a href="/productcategory" class="btn btn-secondary btn-sm position-absolute end-0 mt-3 me-3"><i class="uil uil-arrow-left"></i> Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
