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
                    <div class="card-header">Product Category Detail</div>

                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $category->product_category_name }}</p>
                        <p><strong>Status:</strong> {{ $category->status }}</p>
                        <a href="/productcategory" class="btn btn-secondary btn-sm position-absolute end-0"><i class="uil uil-arrow-left"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
